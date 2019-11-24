<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\livros;

class LivrosController extends Controller
{
  public function book() {

    $BookDados = books::all();
    return view('Books', compact('BookDados'));
  }










}
