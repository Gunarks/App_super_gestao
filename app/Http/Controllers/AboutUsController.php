<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Classe
class AboutUsController extends Controller
{
    // Método ou action
    public function aboutUs()
    {
        return view('site.aboutUs', ['title' => 'Sobre nós']);
    }
}
