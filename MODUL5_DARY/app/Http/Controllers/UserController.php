<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function read($id)
    {
        $profilData = User::find($id)->first();
        return view('profil-dary', [
            'profilData' => $profilData
        ]);
    }
}
