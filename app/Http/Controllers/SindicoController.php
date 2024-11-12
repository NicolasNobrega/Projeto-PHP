<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sindico;
/*
class SindicoController extends Controller
{
    public function showProfile()
    {
        $sindico = auth()->user();
        return view('sindico.profile', compact('sindico'));
    }

    public function uploadPhoto(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $path = $request->file('foto')->store('uploads', 'public');
        $sindico = auth()->user();
        $sindico->foto_perfil = $path;
        $sindico->save();

        return redirect()->back();
    }
}
    */
