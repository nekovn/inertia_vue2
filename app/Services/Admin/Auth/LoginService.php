<?php

namespace App\Services\Admin\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * ログイン関連の処理をまとめたサービスクラス
 */
class LoginService
{
    /**
     * ログイン処理を実行する。 (attemptLogin()から)
     * @param Request $request
     * @return bool true:認証成功 false:認証失敗
     */
    public function login(Request $request)
    {
        $credentials = $request->only('code', 'password');
        $member = isset($request['remember']);
        return Auth::guard('admin')->attempt($credentials, $member);
    }
}
