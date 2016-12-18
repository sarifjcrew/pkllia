<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests;

//model
use App\Pkllia\Models\PtkLia;

use Carbon\Carbon;

class BukuIndukPtkController extends Controller
{
  //
  public function index() {
    return view('bukuinduk.index');
  }

  public function create(){

  }

  public function store(Request $request, PtkLia $ptk) {
    $data = $request->all();

    $data['tanggalLahir'] = Carbon::createFromFormat('Y-m-d', $data['tanggalLahir']);

    PtkLia::where('id', $data['id'])->update($data);
    return (new Response($data));
  }

  public function show($id) {
    $data['id'] = $id;
    return view('bukuinduk.bukuinduk', $data);
  }

  // public function transformationData($data) {
  //   $result = [];
  //   $result['id'] = $data][]
  //   $result['nama'] = $data['identitasPendidikDanTenagaKependidikan']['nama'];
  //   $result['nik'] = $data['identitasPendidikDanTenagaKependidikan']['nik'];
  //   $result['jenisKelamin'] = $data['identitasPendidikDanTenagaKependidikan']['jenisKelamin'];
  //   $result['tempatLahir'] = $data['identitasPendidikDanTenagaKependidikan']['tempatLahir'];
  //   $result['tanggalLahir'] = Carbon::createFromFormat('Y-m-d', $data['identitasPendidikDanTenagaKependidikan']['tanggalLahir']);
  //   $result['namaIbu'] = $data['identitasPendidikDanTenagaKependidikan']['namaIbu'];

  //   $result['alamat'] = $data['dataPribadi']['alamat'];
  //   $result['kelurahanDesa'] = $data['dataPribadi']['kelurahanDesa'];
  //   $result['kecamatanKabupatenPropinsi'] = $data['dataPribadi']['kecamatanKabupatenPropinsi'];
  //   $result['kodePos'] = $data['dataPribadi']['kodePos'];
  //   $result['agama'] = $data['dataPribadi']['agama'];
  //   $result['kewarganegaraan'] = $data['dataPribadi']['kewarganegaraan'];
  //   $result['statusPerkawinan'] = $data['dataPribadi']['statusPerkawinan'];
  //   $result['namaSuamiIstri'] = $data['dataPribadi']['namaSuamiIstri'];
  //   $result['pekerjaanSuamiIstri'] = $data['dataPribadi']['pekerjaanSuamiIstri'];

  //   $result['statusKepegawaian'] = $data['kepegawaian']['statusKepegawaian'];
  //   $result['jenisPtk'] = $data['kepegawaian']['jenisPtk'];
  //   $result['statusAktif'] = $data['kepegawaian']['statusAktif'];
  //   $result['lembagaPengangkat'] = $data['kepegawaian']['lembagaPengangkat'];
  //   $result['sumberGaji'] = $data['kepegawaian']['sumberGaji'];

  //   $result['punyaLisensiKepalaSekolah'] = $data['kompetensiKhusus']['punyaLisensiKepalaSekolah'];
  //   $result['pernahDiklatKepegawaian'] = $data['kompetensiKhusus']['pernahDiklatKepegawaian'];
  //   $result['keahlianBraille'] = $data['kompetensiKhusus']['keahlianBraille'];

  //   $result['hp'] = $data['kontak']['hp'];
  //   $result['alamatEmail'] = $data['kontak']['alamatEmail'];

  //   return $result;
  // }
}
