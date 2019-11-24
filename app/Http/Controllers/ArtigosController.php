<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artigos;

class ArtigosController extends Controller
{
  public function artigo() {

    $dadosArtigos = artigos::all();
    return view('Artigos', compact('dadosArtigos'));
  }




}
