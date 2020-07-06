<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function index()
    {
        $message = request('message');
        return view('sign-up', [
            'message' => $message
        ]);
    }
}
