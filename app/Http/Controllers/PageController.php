<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Train;

class PageController extends Controller
{
    public function index()
    {
   
        $dati = [
            "treni" => Train::where("orario_partenza", "like", "2024-01-23%")
            ->get(),
         
        ];

        return view('home', $dati );
    }
}