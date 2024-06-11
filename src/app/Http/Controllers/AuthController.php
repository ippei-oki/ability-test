<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm()
    {
        //
    }
}
