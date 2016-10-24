<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RegistrationPtkController extends Controller
{
  public function index() {
    return view('registrasi.index');
  }
}
