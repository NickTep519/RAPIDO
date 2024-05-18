<?php

namespace App\Http\Controllers;

use App\Models\Race;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $races = Race::with('driver')->orderBy('created_at', 'asc')->paginate(25) ; 

        return view('home', [
            'races' => $races
        ]) ; 
    }
}
