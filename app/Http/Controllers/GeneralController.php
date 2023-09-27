<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index() {
        $trains = Train::all();

        return view('home', [
            "trains" => $trains
        ]);
    }
}
