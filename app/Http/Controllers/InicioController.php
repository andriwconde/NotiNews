<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class InicioController extends Controller
{
  public function list()
  {
  $articulos = Article::paginate(7);
  $vac = compact("articulos");

  return view('inicio',$vac);
  }
}
