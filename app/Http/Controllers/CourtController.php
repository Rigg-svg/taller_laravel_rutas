<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourtController extends Controller
{
    private $canchas = [
        [
            'nombre' => 'Cancha 1: Tenis A',
            'tipo' => 'Tenis',
            'precioHora' => 25000
        ],
        [
            'nombre' => 'Cancha 2: Fútbol 5',
            'tipo' => 'Fútbol',
            'precioHora' => 90000
        ],
        [
            'nombre' => 'Cancha 3: Tenis B',
            'tipo' => 'Tenis',
            'precioHora' => 22000
        ],
    ];

    public function index()
    {
        return view('courts.index', ['canchas' => $this->canchas]);
    }

    public function create()
    {
        return view('courts.create');
    }

    public function show($id)
    {
        return view('courts.show', ['cancha' => $this->canchas[$id]]);
    }
}