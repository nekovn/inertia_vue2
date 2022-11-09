<?php

namespace App\Http\Controllers\Admin\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;


trait AuthenticatesTrait
{
    use AuthenticatesUsers;

    protected function authenticated(Request $request, $admin)
    {

    }
}
