<?php

namespace App\Http\Controllers\Servers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthRequest;
use App\Mail\ForgotVerifyMail;
use App\Mail\SignupVerifyMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $config['seo'] = __('messages.auth')['login'];
        return view('servers.auth.login', compact(
            'config'
        ));
    }

    public function signup()
    {
        return view('servers.auth.signup');
    }

    public function forgotPassword()
    {
        return view('servers.auth.forgot');
    }

    public function handleForgotPassword(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
        ]);


        $user = User::where('email', $validatedData['email'])->first();
        if (!$user) {
            return redirect()->route('auth.forgot')->with('toast_error', 'Email không tìm thấy. Vui loại kiểm tra email.');
        }
        $randomPassword = Str::random(12);
        $user->password = Hash::make($randomPassword);
        $user->save();

        Mail::to($request->email)->send(new ForgotVerifyMail($randomPassword));
        return redirect()->route('auth.login')->with('toast_success', 'Vui lòng kiểm tra email để đặt lại mật khẩu.');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'fullname' => $validatedData['fullname'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'email_verified_at' => null,
        ]);

        $this->sendVerificationEmail($user);
        return redirect()->route('auth.login')->with('toast_success', 'Đăng ký thành công. Vui lòng kiểm tra email để xác thực.');
    }

    protected function sendVerificationEmail($user)
    {
        $verificationUrl = URL::signedRoute('signup.verify', ['id' => $user->id]);
        Mail::to($user->email)->send(new SignupVerifyMail($verificationUrl));
    }

    public function login(AuthRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if (!$user->hasVerifiedEmail()) {
                Auth::logout(); // Log out the user
                return redirect()->back()->with('toast_error', 'Vui lòng xác thực email của bạn trước khi đăng nhập.');
            }
            return redirect()->route('dashboard.index')->with('toast_success', 'Đăng nhập thành công.');
        }
        return redirect()->back()->with('toast_error', 'Email hoặc mật khẩu không chính xác.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('auth.admin'));
    }
}
