<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        // Dati del database
        $trains = Train::all();
        $trains = Train::orderBy('orario_di_partenza', 'asc')->get();
        // dd($trains);
        return view('home', compact('trains'));
    }
}
