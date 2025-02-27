<?php

namespace App\Http\Controllers;

use App\Models\Animation;
use Illuminate\View\View;

class AnimationController extends Controller
{
    public function show($style, $page = 1): View
    {
        $title = 'Forge ' . $style;
        $description = 'Description de la forge';
        $animations = Animation::all();
        return view('forge', ['title' => $title, 'description' => $description], compact('animations'));
    }
    //
}
