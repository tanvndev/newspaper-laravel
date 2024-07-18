<?php

namespace App\Http\Controllers\Servers;

use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;

class VerificationController
{
    public function signupVerify(Request $request)
    {
        $userId = $request->route('id');
        $user = User::findOrFail($userId);

        if (!$user) {
            return redirect('login')->with('toast_error', 'Có lỗi vui lòng thử lại.');;
        }

        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }

        return redirect('login')->with('toast_success', 'Email của bạn đã được xác thực thành công.');
    }
}
