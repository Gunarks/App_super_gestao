<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function index()
    {
        $providers = [
            0 => [
                'nome'     => 'provider 1',
                'status'   => 'N',
                'CNPJ'     => '00.000.000/000-00',
                'ddd'      => '', // Maceió(AL)
                'telefone' => '00000-0000',
                'cidade'   => ''
            ],
            1 => [
                'nome'     => 'provide2',
                'status'   => 'S',
                'CNPJ'     => '00.000.000/000-00',
                'ddd'      => '82', // Maceió(AL)
                'telefone' => '00000-0000',
                'cidade'   => 'Maceió - AL'
            ]
        ];

        return view('app.provider.index', compact('providers'));
    }
}
