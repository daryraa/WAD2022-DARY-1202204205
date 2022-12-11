<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

class RegisterController extends Controller
{
    public function index()
    {
        return view('Register-Dary');
    }

    public function store(Request $request)
    {
        $validatedData = $request ->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required',
            'no_hp' => 'required',
            'password' => 'required',
            'konfirmasi' => 'required_with:password|same:password'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        return redirect('/login');
}

}
