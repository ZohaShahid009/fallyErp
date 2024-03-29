<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SocialController extends Controller
{
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function loginWithFacebook()
    {
        $user = Socialite::driver('facebook')->stateless()->user();
        $findUser = User::where('facebook_id', $user->id)->first();
        if ($findUser) {
            Auth::login($findUser);
            return redirect('/dashboard');
        } else {
            $new_user = new User();
            $new_user->name = $user->name;
            $new_user->email = $user->email;
            $new_user->facebook_id = $user->id;
            $new_user->password = bcrypt('123456');
            $new_user->save();
            Auth::login($new_user);
            return redirect('/dashboard');
        }
    }


    // login with google
    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function loginWithGoogle()
    {
        $user = Socialite::driver('google')->stateless()->user();
        $findUser = User::where('google_id', $user->id)->first();
        if ($findUser) {
            Auth::login($findUser);
            return redirect('/dashboard');
        } else {
            $new_user = new User();
            $new_user->name = $user->name;
            $new_user->email = $user->email;
            $new_user->google_id = $user->id;
            $new_user->password = bcrypt('123456');
            $new_user->save();
            Auth::login($new_user);
            return redirect('/dashboard');
        }
    }



    public function linkedinRedirect()
    {
        return Socialite::driver('linkedin')->redirect();
    }

    public function loginWithLinkedin()
    {
        $user = Socialite::driver('linkedin')->stateless()->user();
        $findUser = User::where('linkedin_id', $user->id)->first();
        if ($findUser) {
            Auth::login($findUser);
            return redirect('/dashboard');
        } else {
            $new_user = new User();
            $new_user->name = $user->name;
            $new_user->email = $user->email;
            $new_user->linkedin_id = $user->id;
            $new_user->password = bcrypt('123456');
            $new_user->save();
            Auth::login($new_user);
            return redirect('/dashboard');
        }
    }
}
