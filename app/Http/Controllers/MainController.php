<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function comingsoon() {
        return view('pages/comingsoon');
    }
}
