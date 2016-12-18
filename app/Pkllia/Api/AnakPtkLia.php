<?php

namespace App\Pkllia\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//model
use App\Pkllia\Models\AnakPtkLia;

class AnakPtkLiaController extends Controller
{
  //
  public function store($id, Request $request) {
    $data = $request->all();

    $data["id"] = $id;

    $ptk = AnakPtkLia::firstOrCreate($data);

    return (new Response($ptk));
  }
}
