<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2)
    {
        // echo "A soma de $p1 + $p2 é : " . ($p1 + $p2);

        // Enviando paramêtros do Controller para a view com array associativo

        // return view('site.teste', ['p1' => $p1, 'p2' => $p2]);

        // usando o método compact: No método compact usa-se a variável em forma de string e sem o cifrão $;

        // return view('site.teste', compact('p1', 'p2'));

        // Usando o método with: no Método with 

        return view('site.teste')->with('p1', $p1)->with('p2', $p2);
    }
}
