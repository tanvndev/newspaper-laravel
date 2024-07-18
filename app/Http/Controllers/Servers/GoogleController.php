<?php

namespace App\Http\Controllers\Servers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();
            if ($finduser) {
                Auth::login($finduser);
            } else {
                $newUser = User::updateOrCreate(
                    ['email' => $user->email],
                    [
                        'fullname' => $user->name,
                        'google_id' => $user->id,
                        'password' => Hash::make($user->name . '@' . $user->email),
                        'image' => $user->avatar ?? '',
                    ]
                );
                Auth::login($newUser);
            }
            return redirect()->intended('/')->with('toast_success', 'Đăng nhập thành công.');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
