<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        // Retourner la vue de la page index
        return view('index');
    }
    public function about()
    {
        // Retourner la vue de la page about
        return view('about');
    }
}