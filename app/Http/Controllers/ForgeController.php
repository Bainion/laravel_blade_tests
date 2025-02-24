<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ForgeController extends Controller
{
    public function show($style, $page = 1): View
    {
        $title = 'Forge ' . $style;
        $description = 'Description de la forge';
        return view('forge', ['title' => $title, 'description' => $description]);
        //return view('forge-' . $style);
    }
    //
}
