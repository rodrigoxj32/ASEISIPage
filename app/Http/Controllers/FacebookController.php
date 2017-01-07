<?php
namespace App\Http\Controllers;
use Socialite;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class FacebookController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
          if($the_user= User::Select()->where('email','=',$user->email)->first()){
            Auth::login($the_user);
              return redirect()->route('home');
          }else{
            $new_user = new User;
            $new_user->name = $user->name;
            $new_user->email =$user->email;
            $new_user->password = bcrypt($user->token);
            $new_user->rol_id = 2;
            $new_user->save();

            if($the_user= User::Select()->where('email','=',$user->email)->first()){
                Auth::login($the_user);
                  return redirect()->route('home');
            }

            return redirect()->route('home');
          }
    }
}
