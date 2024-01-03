<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function create()
    {
        return view('login');
    }

    public function store(Request $request)
{
    

    $existingClient = DB::table('clients')->where('email', $request->input('email'))->first();

    if ($existingClient) {
        return redirect('/login')->with('error', 'Email already used. Please login.');
    }

    DB::table('clients')->insert([
        'fname' => $request->input('fname'),
        'lname' => $request->input('lname'),
        'email' => $request->input('email'),
        'password' => $request->input('password')
    ]);

    return redirect('/login')->with('success', 'Registration successful. Please login.');
}

   
}