<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcosystemController extends Controller
{
    public function index()
    {
        return view('ecosystems.index');
    }
}