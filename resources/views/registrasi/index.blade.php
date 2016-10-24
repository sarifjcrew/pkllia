@extends('layouts.master')

<style type="text/css">
  .padding-right {
    padding-right: 0px !important;
  }
  .padding-left {
    padding-left: 0px !important;
  }
</style>
@section('content')
<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
    <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
        <li><i class="fa fa-laptop"></i>Dashboard</li>
    </ol>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        Identitas Pendidik dan Tenaga Kependidikan
      </header>
      <div class="panel-body">
        <form class="form-horizontal " method="get">
          <div class="form-group">
            <label class="col-sm-2 control-label">Nama Lengkap *</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Nama Lengkap Tanpa Singkatan Dan Gelar">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">NIK *</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Nomor Induk Kependudukan">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Jenis Kelamin *</label>
            <div class="col-sm-10">
              <label class="radio-inline">
                <input type="radio" checked="">
                Laki-laki
              </label>
              <label class="radio-inline">
                <input type="radio">
                Perempuan
              </label>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Tempat Dan Tanggal Lahir</label>
            <div class="col-sm-10 padding-right padding-left">
              <div class="col-md-12">
                <div class="col-md-8 padding-left">
                  <input class="form-control" placeholder="Tempat Lahir">
                </div>
                <div class="col-md-4 padding-right">
                  <input class="form-control" placeholder="Tanggal Lahir">
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
              <label class="col-sm-2 control-label">Nama Ibu Kandung</label>
              <div class="col-sm-10">
                  <input class="form-control" placeholder="Nama Ibu Kandung">
              </div>
          </div>
        </form>
      </div>
    </section>
    <section class="panel">
      <header class="panel-heading">
        DATA PRIBADI
      </header>
      <div class="panel-body">
        <form class="form-horizontal " method="get">
          <div class="form-group">
            <label class="col-sm-2 control-label">Alamat Jalan *</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Alamat Jalan">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Kelurahan/Desa *</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Kelurahan/Desa">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Kecamatan, Kabupaten/Kota, Propinsi *</label>
            <div class="col-sm-10">
              <select class="form-control">
                <option>1</option>
                <option>2</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Kode Pos</label>
            <div class="col-sm-10">
              <input class="form-control" placeholder="Kode Pos">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Agama</label>
            <div class="col-sm-10">
              <select class="form-control">
                <option>1</option>
                <option>2</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Kewarganegaraan</label>
            <div class="col-sm-10">
              <select class="form-control">
                <option>1</option>
                <option>2</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Status Perkawinan *</label>
            <div class="col-sm-10">
              <label class="radio-inline">
                <input type="radio" checked="">
                Belum Menikah
              </label>
              <label class="radio-inline">
                <input type="radio">
                Menikah
              </label>
              <label class="radio-inline">
                <input type="radio">
                Janda/Duda
              </label>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Nama Suami/Istri</label>
            <div class="col-sm-10">
              <input class="form-control" placeholder="Nama Suami/Istri">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Pekerjaan Pasangan</label>
            <div class="col-sm-10">
              <select class="form-control">
                <option>1</option>
                <option>2</option>
              </select>
            </div>
          </div>
        </form>
      </div>
    </section>
    <section class="panel">
      <header class="panel-heading">
        KEPEGAWAIAN
      </header>
      <div class="panel-body">
        <form class="form-horizontal " method="get">
          <div class="form-group">
            <label class="col-sm-2 control-label">Status Kepegawaian *</label>
            <div class="col-sm-10">
              <select class="form-control">
                <option>1</option>
                <option>2</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Jenis PTK *</label>
            <div class="col-sm-10">
              <select class="form-control">
                <option>1</option>
                <option>2</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Status Aktif *</label>
            <div class="col-sm-10">
              <select class="form-control">
                <option>1</option>
                <option>2</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Lembaga Pengangkat *</label>
            <div class="col-sm-10">
              <select class="form-control">
                <option>1</option>
                <option>2</option>
              </select>
            </div>
          </div>
          <div class="form-group">
              <label class="col-sm-2 control-label">Sumber Gaji *</label>
              <div class="col-sm-10">
                <select class="form-control">
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
          </div>
        </form>
      </div>
    </section>
    <section class="panel">
      <header class="panel-heading">
        KOMPETENSI KHUSUS
      </header>
      <div class="panel-body">
        <form class="form-horizontal " method="get">
          <div class="form-group">
            <label class="col-sm-2 control-label">Punya Lisensi Kepala Sekolah *</label>
            <div class="col-sm-10">
              <label class="radio-inline">
                <input type="radio" checked="">
                Ya
              </label>
              <label class="radio-inline">
                <input type="radio">
                Tidak
              </label>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Pernah Mengikuti Diklat Kepegawaian *</label>
            <div class="col-sm-10">
              <label class="radio-inline">
                <input type="radio" checked="">
                Ya
              </label>
              <label class="radio-inline">
                <input type="radio">
                Tidak
              </label>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Keahlian Braile *</label>
            <div class="col-sm-10">
              <label class="radio-inline">
                <input type="radio" checked="">
                Ya
              </label>
              <label class="radio-inline">
                <input type="radio">
                Tidak
              </label>
            </div>
          </div>
        </form>
      </div>
    </section>
    <section class="panel">
      <header class="panel-heading">
        Kontak
      </header>
      <div class="panel-body">
        <form class="form-horizontal " method="get">
          <div class="form-group">
            <label class="col-sm-2 control-label">Nomor Hp *</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Nomor Handphone">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Alamat Email *</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Alamat Email">
            </div>
          </div>
        </form>
      </div>
    </section>
    <section class="panel">
      <div class="panel-body">
        <div class="pull-right">
          <button class="btn btn-primary">
              Simpan
          </button>
          <button class="btn  btn-warning">
              Tambah Baru
          </button>
        </div>
      </div>
    </section>
  </div>
</div>
@endsection