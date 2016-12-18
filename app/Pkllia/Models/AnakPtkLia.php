<?php

namespace App\Pkllia\Models;

use Illuminate\Database\Eloquent\Model;

class AnakPtkLia extends Model
{
  //
  //
  protected $table = 'anak_ptklia';

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */

  protected $dates = ['tanggalLahir'];

  protected $fillable = ['ptk_id','statusAnakId','nama', 'jenisKelamin', 'tempatLahir', 'tanggalLahir', 'jenjangPendidikanId', 'nisn','tahunMasuk'];
}
