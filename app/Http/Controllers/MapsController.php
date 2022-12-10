<?php

namespace App\Http\Controllers;

use App\Models\Statistic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MapsController extends Controller
{
    public function index()
    {
        return view('peta', [
            'title' => 'Peta Banjir',
            'maps' => Statistic::all(),
        ]);
    }
}
