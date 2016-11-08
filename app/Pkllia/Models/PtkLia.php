<?php

namespace App\Pkllia\Models;

use Illuminate\Database\Eloquent\Model;

class PtkLia extends Model
{
  //
  protected $table = 'ptk_lia';

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = ['nama','nik', 'jenisKelamin', 'tempatLahir', 'namaIbu', 'alamat',
   'kelurahanDesa', 'kecamatanKabupatenPropinsi', 'kodePos', 'agama', 'kewarganegaraan', 'statusPerkawinan',
   'namaSuamiIstri', 'pekerjaanSuamiIstri', 'statusKepegawaian', 'jenisPtk', 'statusAktif', 'lembagaPengangkat',
   'sumberGaji', 'punyaLisensiKepalaSekolah', 'pernahDiklatKepegawaian', 'keahlianBraille', 'hp', 'alamatEmail'
  ];
}
