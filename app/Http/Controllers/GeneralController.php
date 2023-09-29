<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index() {
        $trains = Train::where("giorno_partenza", date("Y-m-d"))->get();

        return view('home', [
            "trains" => $trains
        ]);
    }
}
