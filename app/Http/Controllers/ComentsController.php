<?php

namespace App\Http\Controllers;
use App\Coment;
use Illuminate\Http\Request;

class coments extends Controller
{
  public function index(Request $request)
    {
        $coments = Coment::all();
        $vac = compact('coment');
        return view('escritor.article.index',$vac);
    }
}
