<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemperatureController extends Controller
{
    public function calculateF(float $c) {
        $f = $c * 9 / 5 + 32;

        return view('temperature', 
        [
            'celcius' => $c,
            'fahrenheit' => $f
        ]);
    }
}
