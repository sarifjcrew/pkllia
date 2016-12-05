<?php

namespace App\Pkllia\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//model
use App\Pkllia\Models\PtkLia;

//model ref
use App\Pkllia\Models\Agama;
use App\Pkllia\Models\JenisPtk;
use App\Pkllia\Models\LembagaPengangkat;
use App\Pkllia\Models\Negara;
use App\Pkllia\Models\Pekerjaan;
use App\Pkllia\Models\StatusKeaktifanPegawai;
use App\Pkllia\Models\StatusKepegawaian;
use App\Pkllia\Models\SumberGaji;

class Ptk extends Controller
{
  //
  public function Index(){
    $data = [];

    $data['Agama'] = Agama::all();
    $data['JenisPtk'] = JenisPtk::all();
    $data['LembagaPengangkat'] = LembagaPengangkat::all();
    $data['Negara'] = Negara::all();
    $data['Pekerjaan'] = Pekerjaan::all();
    $data['StatusKeaktifanPegawai'] = StatusKeaktifanPegawai::all();
    $data['StatusKepegawaian'] = StatusKepegawaian::all();
    $data['SumberGaji'] = SumberGaji::all();

    return (new Response($data));
  }

  public function Show($id){
    $data = [];
    $data['ptk'] = PtkLia::find($id);
    $data['Agama'] = Agama::all();
    $data['JenisPtk'] = JenisPtk::all();
    $data['LembagaPengangkat'] = LembagaPengangkat::all();
    $data['Negara'] = Negara::all();
    $data['Pekerjaan'] = Pekerjaan::all();
    $data['StatusKeaktifanPegawai'] = StatusKeaktifanPegawai::all();
    $data['StatusKepegawaian'] = StatusKepegawaian::all();
    $data['SumberGaji'] = SumberGaji::all();

    return (new Response($data));
  }

  public function GetPtk(){
    $data = [];

    $data['Ptk'] = PtkLia::all();

    return (new Response($data));
  }
}
