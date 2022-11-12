<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormIdentitasController extends Controller
{
    public function inputIdentitas()
    {
        return view('identitas.inputIdentitas', [
            'title' => 'Identitas'
        ]);
    }
}
