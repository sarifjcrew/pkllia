<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//model
use App\Pkllia\Models\PtkLia;

class BukuIndukPtkController extends Controller
{
  //
  public function index() {
    return view('bukuinduk.index');
  }

  public function create(){

  }

  public function store() {

  }

  public function show($id) {
    $data['id'] = $id;
    return view('bukuinduk.bukuinduk', $data);
  }
}
