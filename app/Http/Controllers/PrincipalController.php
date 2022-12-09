<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Classe
class PrincipalController extends Controller
{
    // Método ou action
    public function principal()
    {
        return view('site.principal', ['title' => 'Página inicial']);
    }
};
