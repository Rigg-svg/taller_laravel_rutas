<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    private $resumenMes = [
        'enero' => [
            'reservas' => 120,
            'ganancias' => 3500.50,
            'promedio' => 29.17,
        ],
        'febrero' => [
            'reservas' => 145,
            'ganancias' => 4200.00,
            'promedio' => 28.96,
        ],
        'marzo' => [
            'reservas' => 130,
            'ganancias' => 3800.75,
            'promedio' => 29.25,
        ]
    ];

    public function monthlyReport(?string $mes = null)
    {
        $mes = $mes ?? 'marzo';
        return view('reports.show', ['resumenMes' => $this->resumenMes[$mes]]);
    }
}