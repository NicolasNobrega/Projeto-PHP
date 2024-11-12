<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Morador;
use App\Models\Sindico;

class PasswordController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ]);

        $password = Hash::make($request->input('password'));
        $user = Morador::where('email', $request->email)->first()
              ?? Sindico::where('email', $request->email)->first();

        if ($user) {
            $user->update(['senha' => $password]);
            return redirect()->route('login')->with('status', 'Senha atualizada.');
        }

        return back()->withErrors(['email' => 'Usuário não encontrado.']);
    }
}
