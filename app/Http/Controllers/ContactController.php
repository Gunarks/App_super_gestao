<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// Classe 
class ContactController extends Controller
{
    // Método ou action
    public function contact(Request $request)
    {

        return view('site.contacts', ['title' => 'Contato']);
    }
}
