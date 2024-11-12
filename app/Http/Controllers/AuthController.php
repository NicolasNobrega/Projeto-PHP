<?php

namespace App\Http\Controllers;

use App\Models\Sindico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $sindico = Sindico::where('email', $request->email)->first();

        if ($sindico && Hash::check($request->password, $sindico->senha)) {
            Auth::login($sindico);
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors(['email' => 'As credenciais informadas não são válidas.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

}
