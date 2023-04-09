<?php

namespace App\Http\Controllers;
use App\Models\artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    //
    public function index(){
        $Artikel = artikel::latest()->get();
        return view('one2one', compact('Artikel'),["title" => "OneToOne"]);
    }
}
