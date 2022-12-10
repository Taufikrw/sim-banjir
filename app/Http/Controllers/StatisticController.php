<?php

namespace App\Http\Controllers;

use App\Models\Statistic;
// use App\Http\Controllers\Controller;

class StatisticController extends Controller
{
    public function index()
    {
        return view('statistik', [
            'title' => 'Data Statistik',
            'stats' => Statistic::all(),
        ]);
    }

    public function lihat()
    {
        return view('peta', [
            "title" => "Peta Banjir",
            'maps' => Statistic::all(),
        ]);
    }
}
