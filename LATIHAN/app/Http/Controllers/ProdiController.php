<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class ProdiController extends Controller
{
    //
}

public function index(): View{
    $listprodi = prodi::get()
    return view ("prodi.index");
}
public function create():{
    return view


}
