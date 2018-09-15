<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    /**
     * Get the authenticated User.
     */
    public function me()
    {
        return auth()->user();
    }
}
