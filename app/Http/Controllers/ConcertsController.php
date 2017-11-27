<?php

namespace App\Http\Controllers;

use App\Concert;
use Illuminate\Http\Request;

class ConcertsController extends Controller
{
    //
    public  function show($id)
    {
        $concerts = Concert::find($id);
        return view('concerts.show', ['concerts' => $concerts]);
    }
}
