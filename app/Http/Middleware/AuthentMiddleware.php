<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;


class AuthentMiddleware 
{
    public function handle($request, Closure $next)
    {
        // Your authentication logic here
        $email = $request->input('email');
        $password = $request->input('password');

        // Check clients table
        $client = DB::table('clients')->where('email', $email)->first();

        if ($client && $client->password === $password) {
            return redirect('clientdashboard');
        } else {
            // Check admins table
            $admin = DB::table('admins')->where('email', $email)->first();

            if ($admin && $admin->password === $password) {
                return redirect('admindashboard');
            }
        }

        // If no user is found or incorrect password, display error message
        session()->flash('error', 'Invalid email or password');
        return redirect('/login');
    }
}