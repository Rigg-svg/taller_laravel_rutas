<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    private $reservas = [
        [
            'id' => 101,
            'cancha' => 'Tenis A',
            'fecha' => '2026-03-05',
            'hora' => '18:00',
            'cliente' => 'Luis',
            'total' => 20000
        ],
        [
            'id' => 102,
            'cancha' => 'Fútbol 5',
            'fecha' => '2026-03-06',
            'hora' => '19:00',
            'cliente' => 'Marta',
            'total' => 30000
        ],
        [
            'id' => 103,
            'cancha' => 'Padel B',
            'fecha' => '2026-03-07',
            'hora' => '20:00',
            'cliente' => 'Carlos',
            'total' => 50000
        ],

    ];
    public function index()
    {
        return view('bookings.index', ['reservas' => $this->reservas]);
    }

    public function create()
    {
        return view('bookings.create');
    }

    public function show($id)
    {
        return view('bookings.show', ['reserva' => $this->reservas[$id]]);
    }
}