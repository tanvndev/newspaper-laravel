<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthenticateMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect(route('auth.admin'))->with('toast_error', 'Vui lòng đăng nhập.');
        } elseif (Auth::user()->user_catalogue_id != 1) {
            Auth::logout();
            return redirect(route('auth.admin'))->with('toast_error', 'Bạn không có quyền truy cập.');
        }
        return $next($request);
    }
}
