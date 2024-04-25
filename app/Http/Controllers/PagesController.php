<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $trains = Train::all();

        dd($trains);

        return view('homepage', compact('trains'));
    }
}
