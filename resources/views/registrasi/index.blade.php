@extends('layouts.master')

<style type="text/css">
  .padding-right {
    padding-right: 0px !important;
  }
  .padding-left {
    padding-left: 0px !important;
  }

  .k-select {
    padding-top: 8px;
  }
</style>
@section('content')
<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-laptop"></i> Registrasi</h3>
    <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
        <li><i class="fa fa-laptop"></i>Registrasi</li>
    </ol>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <input  type="hidden" name="_token" value="{{ csrf_token()}}">
    <section class="panel">
      <header class="panel-heading">
        IDENTITAS PENDIDIK DAN TENAGA KEPENDIDIKAN
      </header>
      <div class="panel-body">
        <form class="form-horizontal " method="get">
          <div class="form-group">
            <label class="col-sm-2 control-label">Nama Lengkap *</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" data-bind="value: Registrasi.RegistrasiModel.identitasPendidikDanTenagaKependidikan.nama" placeholder="Nama Lengkap Tanpa Singkatan Dan Gelar">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">NIK *</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" data-bind="value: Registrasi.RegistrasiModel.identitasPendidikDanTenagaKependidikan.nik" placeholder="Nomor Induk Kependudukan">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Jenis Kelamin *</label>
            <div class="col-sm-10">
              <label class="radio-inline">
                <input type="radio" value="true" name="jenisKelamin" data-bind="checked: Registrasi.RegistrasiModel.identitasPendidikDanTenagaKependidikan.jenisKelamin" checked="">
                Laki-laki
              </label>
              <label class="radio-inline">
                <input type="radio" value="false" name="jenisKelamin" data-bind="checked: Registrasi.RegistrasiModel.identitasPendidikDanTenagaKependidikan.jenisKelamin">
                Perempuan
              </label>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Tempat Dan Tanggal Lahir</label>
            <div class="col-sm-10 padding-right padding-left">
              <div class="col-md-12">
                <div class="col-md-8 padding-left">
                  <input class="form-control" data-bind="value: Registrasi.RegistrasiModel.identitasPendidikDanTenagaKependidikan.tempatLahir" placeholder="Tempat Lahir">
                </div>
                <div class="col-md-4 padding-right">
                  <input class="form-control" data-bind="kendoDatePicker: {value: Registrasi.RegistrasiModel.identitasPendidikDanTenagaKependidikan.tanggalLahir, format: 'dd/MM/yyyy'}" placeholder="Tanggal Lahir">
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
              <label class="col-sm-2 control-label">Nama Ibu Kandung</label>
              <div class="col-sm-10">
                <input class="form-control" data-bind="value: Registrasi.RegistrasiModel.identitasPendidikDanTenagaKependidikan.namaIbu" placeholder="Nama Ibu Kandung">
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
              <input type="text" class="form-control" data-bind="value: Registrasi.RegistrasiModel.dataPribadi.alamat" placeholder="Nama Ibu Kandung" placeholder="Alamat Jalan">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Kelurahan/Desa *</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" data-bind="value: Registrasi.RegistrasiModel.dataPribadi.kelurahanDesa" placeholder="Nama Ibu Kandung" placeholder="Kelurahan/Desa">
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
              <input class="form-control" data-bind="value: Registrasi.RegistrasiModel.dataPribadi.kodePos" placeholder="Nama Ibu Kandung" placeholder="Kode Pos">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Agama</label>
            <div class="col-sm-10">
              <input class="form-control" style="width: 100%" data-bind="kendoDropDownList: { dataTextField: 'nama', dataValueField: 'agama_id', data: Registrasi.RefModel().Agama, value: Registrasi.RegistrasiModel.dataPribadi.agama, optionLabel: '--pilih agama--' }">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Kewarganegaraan</label>
            <div class="col-sm-10">
              <input class="form-control" style="width: 100%" data-bind="kendoDropDownList: { dataTextField: 'nama', dataValueField: 'negara_id', data: Registrasi.RefModel().Negara, value: Registrasi.RegistrasiModel.dataPribadi.kewarganegaraan, optionLabel: '--pilih negara--' }">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Status Perkawinan *</label>
            <div class="col-sm-10">
              <label class="radio-inline">
                <input type="radio" value="belum menikah" name="statusPerkawinan" data-bind="checked: Registrasi.RegistrasiModel.dataPribadi.statusPerkawinan" placeholder="Nama Ibu Kandung" checked="">
                Belum Menikah
              </label>
              <label class="radio-inline">
                <input type="radio" value="menikah" name="statusPerkawinan" data-bind="checked: Registrasi.RegistrasiModel.dataPribadi.statusPerkawinan" placeholder="Nama Ibu Kandung">
                Menikah
              </label>
              <label class="radio-inline">
                <input type="radio" value="janda/duda" name="statusPerkawinan" data-bind="checked: Registrasi.RegistrasiModel.dataPribadi.statusPerkawinan" placeholder="Nama Ibu Kandung">
                Janda/Duda
              </label>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Nama Suami/Istri</label>
            <div class="col-sm-10">
              <input class="form-control" data-bind="value: Registrasi.RegistrasiModel.dataPribadi.namaSuamiIstri" placeholder="Nama Ibu Kandung" placeholder="Nama Suami/Istri">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Pekerjaan Pasangan</label>
            <div class="col-sm-10">
              <input class="form-control" style="width: 100%" data-bind="kendoDropDownList: { dataTextField: 'nama', dataValueField: 'pekerjaan_id', data: Registrasi.RefModel().Pekerjaan, value: Registrasi.RegistrasiModel.dataPribadi.pekerjaanSuamiIstri, optionLabel: '--pilih pekerjaan--' }">
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
              <input class="form-control" style="width: 100%" data-bind="kendoDropDownList: { dataTextField: 'nama', dataValueField: 'status_kepegawaian_id', data: Registrasi.RefModel().StatusKepegawaian, value: Registrasi.RegistrasiModel.kepegawaian.statusKepegawaian, optionLabel: '--pilih status pegawai--' }">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Jenis PTK *</label>
            <div class="col-sm-10">
              <input class="form-control" style="width: 100%" data-bind="kendoDropDownList: { dataTextField: 'jenis_ptk', dataValueField: 'jenis_ptk_id', data: Registrasi.RefModel().JenisPtk, value: Registrasi.RegistrasiModel.kepegawaian.jenisPtk, optionLabel: '--pilih jenis ptk--' }">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Status Aktif *</label>
            <div class="col-sm-10">
              <input class="form-control" style="width: 100%" data-bind="kendoDropDownList: { dataTextField: 'nama', dataValueField: 'status_keaktifan_id', data: Registrasi.RefModel().StatusKeaktifanPegawai, value: Registrasi.RegistrasiModel.kepegawaian.statusAktif, optionLabel: '--pilih status aktif--' }">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Lembaga Pengangkat *</label>
            <div class="col-sm-10">
              <input class="form-control" style="width: 100%" data-bind="kendoDropDownList: { dataTextField: 'nama', dataValueField: 'lembaga_pengangkat_id', data: Registrasi.RefModel().LembagaPengangkat, value: Registrasi.RegistrasiModel.kepegawaian.lembagaPengangkat, optionLabel: '--pilih lembaga pengangkat--' }">
            </div>
          </div>
          <div class="form-group">
              <label class="col-sm-2 control-label">Sumber Gaji *</label>
              <div class="col-sm-10">
                <input class="form-control" style="width: 100%" data-bind="kendoDropDownList: { dataTextField: 'nama', dataValueField: 'sumber_gaji_id', data: Registrasi.RefModel().SumberGaji, value: Registrasi.RegistrasiModel.kepegawaian.sumberGaji, optionLabel: '--pilih sumber gaji--' }">
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
                <input type="radio" value="true" name="lisensi-kepalasekolah" checked="" data-bind="checked: Registrasi.RegistrasiModel.kompetensiKhusus.punyaLisensiKepalaSekolah">
                Ya
              </label>
              <label class="radio-inline">
                <input type="radio" value="false" name="lisensi-kepalasekolah" data-bind="checked: Registrasi.RegistrasiModel.kompetensiKhusus.punyaLisensiKepalaSekolah">
                Tidak
              </label>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Pernah Mengikuti Diklat Kepegawaian *</label>
            <div class="col-sm-10">
              <label class="radio-inline">
                <input type="radio" value="true" name="diklatkepegawaian" checked="" data-bind="checked: Registrasi.RegistrasiModel.kompetensiKhusus.pernahDiklatKepegawaian">
                Ya
              </label>
              <label class="radio-inline">
                <input type="radio" value="false" name="diklatkepegawaian" data-bind="checked: Registrasi.RegistrasiModel.kompetensiKhusus.pernahDiklatKepegawaian">
                Tidak
              </label>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Keahlian Braile *</label>
            <div class="col-sm-10">
              <label class="radio-inline">
                <input type="radio" value="true" name="keahlianbraille" checked="" data-bind="checked: Registrasi.RegistrasiModel.kompetensiKhusus.keahlianBraille">
                Ya
              </label>
              <label class="radio-inline">
                <input type="radio" value="false" name="keahlianbraille" data-bind="checked: Registrasi.RegistrasiModel.kompetensiKhusus.keahlianBraille">
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
              <input type="text" class="form-control" data-bind="value: Registrasi.RegistrasiModel.kontak.hp" placeholder="Nomor Handphone">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Alamat Email *</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" data-bind="value: Registrasi.RegistrasiModel.kontak.alamatEmail" placeholder="Alamat Email">
            </div>
          </div>
        </form>
      </div>
    </section>
    <section class="panel">
      <div class="panel-body">
        <div class="pull-right">
          <button class="btn btn-primary" data-bind="click: Registrasi.save()">
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

@section('script')
<!-- Core !-->
{!! HTML::script('js/core/registrasi.js') !!}
@endsection