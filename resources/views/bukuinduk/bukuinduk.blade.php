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
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Data Pribadi</a>
            </h4>
          </div>
          <div id="collapse1" class="panel-collapse collapse in">
            <div class="panel-body">
              <section class="panel">
                <header class="panel-heading">
                  IDENTITAS PENDIDIK DAN TENAGA KEPENDIDIKAN
                </header>
                <div class="panel-body">
                  <div class="pull-right" style="margin-bottom: 10px;">
                    <button class="btn btn-primary" data-bind="click: save"><i class="fa fa-save"></i> Simpan</button>
                    <button class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Cancel</button>
                  </div>
                  <div class="clearfix"></div>
                  <form class="form-horizontal">
                    <input type="hidden" id="Id" value="{{$id}}">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Lengkap *</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" data-bind="value: bukuIndukModel().nama" placeholder="Nama Lengkap Tanpa Singkatan Dan Gelar">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">NIK *</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" data-bind="value: bukuIndukModel().nik" placeholder="Nomor Induk Kependudukan">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Jenis Kelamin *</label>
                      <div class="col-sm-10">
                        <label class="radio-inline">
                          <input type="radio" value="true" data-bind="checked: bukuIndukModel().jenisKelamin">
                          Laki-laki
                        </label>
                        <label class="radio-inline">
                          <input type="radio" value="false" data-bind="checked: bukuIndukModel().jenisKelamin">
                          Perempuan
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Tempat Dan Tanggal Lahir</label>
                      <div class="col-sm-10 padding-right padding-left">
                        <div class="col-md-12">
                          <div class="col-md-8 padding-left">
                            <input class="form-control" data-bind="value: bukuIndukModel().tempatLahir" placeholder="Tempat Lahir">
                          </div>
                          <div class="col-md-4 padding-right">
                            <input class="form-control" data-bind="kendoDatePicker: {value: bukuIndukModel().tanggalLahir, format: 'dd/MM/yyyy'}" placeholder="Tanggal Lahir">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Ibu Kandung</label>
                        <div class="col-sm-10">
                          <input class="form-control" data-bind="value: bukuIndukModel().namaIbu" placeholder="Nama Ibu Kandung">
                        </div>
                    </div>
                  </form>
                  <div class="pull-right" style="margin-bottom: 10px;">
                    <button class="btn btn-primary" data-bind="click: save"><i class="fa fa-save"></i> Simpan</button>
                    <button class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Cancel</button>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </section>
              <section class="panel">
                <header class="panel-heading">
                  DATA PRIBADI
                </header>
                <div class="panel-body">
                  <div class="pull-right" style="margin-bottom: 10px;">
                    <button class="btn btn-primary" data-bind="click: save"><i class="fa fa-save"></i> Simpan</button>
                    <button class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Cancel</button>
                  </div>
                  <div class="clearfix"></div>
                  <form class="form-horizontal " method="get">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Alamat Jalan *</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" data-bind="value: bukuIndukModel().alamat" placeholder="Alamat Jalan">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">RT/RW</label>
                      <div class="col-sm-10 padding-right padding-left">
                        <div class="col-md-12">
                          <div class="col-md-6 padding-left">
                            <input class="form-control" data-bind="value: bukuIndukModel().rt" placeholder="RT">
                          </div>
                          <div class="col-md-6 padding-right">
                            <input class="form-control" data-bind="value: bukuIndukModel().rw" placeholder="RW">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Kelurahan/Desa *</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" data-bind="value: bukuIndukModel().kelurahanDesa" placeholder="Kelurahan/Desa">
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
                      <label class="col-sm-2 control-label">Agama</label>
                      <div class="col-sm-10">
                        <input class="form-control" style="width: 100%" id="agama" data-bind="kendoDropDownList: { dataTextField: 'nama', dataValueField: 'agama_id', data: refModel.Agama, value: agama, optionLabel: '--pilih agama--' }">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">No Kartu Keluarga *</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" data-bind="value: bukuIndukModel().noKartuKeluarga" placeholder="No Kartu Keluarga">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">NPWP *</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" data-bind="value: bukuIndukModel().npwp" placeholder="Nomor Pokok Wajib Pajak">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Kewarganegaraan</label>
                      <div class="col-sm-10">
                        <input class="form-control" style="width: 100%" data-bind="kendoDropDownList: { dataTextField: 'nama', dataValueField: 'negara_id', data: refModel.Negara, value: kewarganegaraan, optionLabel: '--pilih negara--' }">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Status Perkawinan *</label>
                      <div class="col-sm-10">
                        <label class="radio-inline">
                          <input type="radio" value="belum menikah" data-bind="checked: bukuIndukModel().statusPerkawinan" placeholder="Nama Ibu Kandung">
                          Belum Menikah
                        </label>
                        <label class="radio-inline">
                          <input type="radio" value="menikah" data-bind="checked: bukuIndukModel().statusPerkawinan" placeholder="Nama Ibu Kandung">
                          Menikah
                        </label>
                        <label class="radio-inline">
                          <input type="radio" value="janda/duda" data-bind="checked: bukuIndukModel().statusPerkawinan">
                          Janda/Duda
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Suami/Istri</label>
                      <div class="col-sm-10">
                        <input class="form-control" data-bind="value: bukuIndukModel().namaSuamiIstri" placeholder="Nama Ibu Kandung" placeholder="Nama Suami/Istri">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">NIP Suami/Istri *</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" data-bind="value: bukuIndukModel().nipSuamiIstri" placeholder="No Kartu Keluarga">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Pekerjaan Suami/Istri</label>
                      <div class="col-sm-10">
                        <input class="form-control" style="width: 100%" data-bind="kendoDropDownList: { dataTextField: 'nama', dataValueField: 'pekerjaan_id', data: refModel.Pekerjaan, value: pekerjaanSuamiIstri, optionLabel: '--pilih pekerjaan--' }">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">NRG *</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" data-bind="value: bukuIndukModel().nrg" placeholder="NRG">
                      </div>
                    </div>
                  </form>
                  <div class="pull-right" style="margin-bottom: 10px;">
                    <button class="btn btn-primary" data-bind="click: save"><i class="fa fa-save"></i> Simpan</button>
                    <button class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Cancel</button>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </section>
              <section class="panel">
                <header class="panel-heading">
                  KEPEGAWAIAN
                </header>
                <div class="panel-body">
                  <div class="pull-right" style="margin-bottom: 10px;">
                    <button class="btn btn-primary" data-bind="click: save"><i class="fa fa-save"></i> Simpan</button>
                    <button class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Cancel</button>
                  </div>
                  <div class="clearfix"></div>
                  <form class="form-horizontal " method="get">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Status Kepegawaian *</label>
                      <div class="col-sm-10">
                        <input class="form-control" style="width: 100%" data-bind="kendoDropDownList: { dataTextField: 'nama', dataValueField: 'status_kepegawaian_id', data: refModel.StatusKepegawaian, value: statusKepegawaian, optionLabel: '--pilih status pegawai--' }">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">NIP *</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" data-bind="value: bukuIndukModel().nip" placeholder="NIP">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">NIY/NIGK *</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" data-bind="value: bukuIndukModel().niyNigk" placeholder="NIY/NIGK">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">NIGB *</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" data-bind="value: bukuIndukModel().nigb" placeholder="NIGB">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">NUPTK *</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" data-bind="value: bukuIndukModel().nuptk" placeholder="NUPTK">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Jenis PTK *</label>
                      <div class="col-sm-10">
                        <input class="form-control" style="width: 100%" data-bind="kendoDropDownList: { dataTextField: 'jenis_ptk', dataValueField: 'jenis_ptk_id', data: refModel.JenisPtk, value: jenisPtk, optionLabel: '--pilih jenis ptk--' }">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Status Aktif *</label>
                      <div class="col-sm-10">
                        <input class="form-control" style="width: 100%" data-bind="kendoDropDownList: { dataTextField: 'nama', dataValueField: 'status_keaktifan_id', data: refModel.StatusKeaktifanPegawai, value: statusKeaktifan, optionLabel: '--pilih status aktif--' }">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">SK Pengangkat *</label>
                      <div class="col-sm-10">
                        <input class="form-control" style="width: 100%" data-bind="value: bukuIndukModel().skPengangkat">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">TMT Pengangkat *</label>
                      <div class="col-sm-10">
                        <input class="form-control" style="width: 100%" data-bind="value: bukuIndukModel().tmtPengangkat">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Lembaga Pengangkat *</label>
                      <div class="col-sm-10">
                        <input class="form-control" style="width: 100%" data-bind="kendoDropDownList: { dataTextField: 'nama', dataValueField: 'lembaga_pengangkat_id', data: refModel.LembagaPengangkat, value: lembagaPengangkat, optionLabel: '--pilih lembaga pengangkat--' }">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Pangkat Golongan *</label>
                      <div class="col-sm-10">
                        <input class="form-control" style="width: 100%" data-bind="value: bukuIndukModel().pangkatGolongan">
                      </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Sumber Gaji *</label>
                        <div class="col-sm-10">
                          <input class="form-control" style="width: 100%" data-bind="kendoDropDownList: { dataTextField: 'nama', dataValueField: 'sumber_gaji_id', data: refModel.SumberGaji, value: sumberGaji, optionLabel: '--pilih sumber gaji--' }">
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Punya Lisensi Kepala Sekolah *</label>
                      <div class="col-sm-10">
                        <label class="radio-inline">
                          <input type="radio" value="true" data-bind="checked: bukuIndukModel().punyaLisensiKepalaSekolah">
                          Ya
                        </label>
                        <label class="radio-inline">
                          <input type="radio" value="false" data-bind=" checked: bukuIndukModel().punyaLisensiKepalaSekolah">
                          Tidak
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Pernah Mengikuti Diklat Kepegawaian *</label>
                      <div class="col-sm-10">
                        <label class="radio-inline">
                          <input type="radio" value="true" data-bind="checked: bukuIndukModel().pernahDiklatKepegawaian">
                          Ya
                        </label>
                        <label class="radio-inline">
                          <input type="radio" value="false" data-bind="checked: bukuIndukModel().pernahDiklatKepegawaian">
                          Tidak
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Keahlian Braile *</label>
                      <div class="col-sm-10">
                        <label class="radio-inline">
                          <input type="radio" value="true" data-bind="checked: bukuIndukModel().keahlianBraille">
                          Ya
                        </label>
                        <label class="radio-inline">
                          <input type="radio" value="false" data-bind="checked: bukuIndukModel().keahlianBraille">
                          Tidak
                        </label>
                      </div>
                    </div>
                  </form>
                  <div class="pull-right" style="margin-bottom: 10px;">
                    <button class="btn btn-primary" data-bind="click: save"><i class="fa fa-save"></i> Simpan</button>
                    <button class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Cancel</button>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </section>
              <section class="panel">
                <header class="panel-heading">
                  KONTAK
                </header>
                <div class="panel-body">
                  <div class="pull-right" style="margin-bottom: 10px;">
                    <button class="btn btn-primary" data-bind="click: save"><i class="fa fa-save"></i> Simpan</button>
                    <button class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Cancel</button>
                  </div>
                  <div class="clearfix"></div>
                  <form class="form-horizontal " method="get">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">No. Telepon *</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" data-bind="value: bukuIndukModel().noTelepon" placeholder="Nomor Telephone">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">No. Hp *</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" data-bind="value: bukuIndukModel().hp" placeholder="Nomor Handphone">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">No. Fax *</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" data-bind="value: bukuIndukModel().noFax" placeholder="No Fax">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Alamat Email *</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" data-bind="value: bukuIndukModel().alamatEmail" placeholder="Alamat Email">
                      </div>
                    </div>
                  </form>
                  <div class="pull-right" style="margin-bottom: 10px;">
                    <button class="btn btn-primary" data-bind="click: save"><i class="fa fa-save"></i> Simpan</button>
                    <button class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Cancel</button>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </section>
              <section class="panel">
                <header class="panel-heading">
                  ANAK
                </header>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="pull-right" style="margin-bottom:10px;">
                        <button class="btn btn-primary" data-toogle="modal" data-target="#modalAnak" data-bind="click: showModal('#modalAnak')">tambah baru</button>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="col-md-12">
                      <div data-bind="kendoGrid: dataAnak">
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Jabatan</a>
            </h4>
          </div>
          <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">
              <section class="panel">
                <header class="panel-heading">
                  TUGAS TAMBAHAN
                </header>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div id="gridTugasTambahan">
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section class="panel">
                <header class="panel-heading">
                  JABATAN STRUKTURAL
                </header>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div id="gridJabatanStruktural">
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section class="panel">
                <header class="panel-heading">
                  KEPANGKATAN
                </header>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div id="gridKepangkatan">
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section class="panel">
                <header class="panel-heading">
                  JABATAN FUNGSIONAL
                </header>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div id="gridJabatanFungsional">
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Pendidikan & Beasiswa</a>
            </h4>
          </div>
          <div id="collapse3" class="panel-collapse collapse">
            <div class="panel-body">
              <section class="panel">
                <header class="panel-heading">
                  PENDIDIKAN FORMAL
                </header>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div id="gridPendidikanFormal">
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section class="panel">
                <header class="panel-heading">
                  BEASISWA
                </header>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div id="gridBeasiswa">
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section class="panel">
                <header class="panel-heading">
                  BEASISWA BUKU
                </header>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div id="gridBeasiswaBuku">
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modalAnak" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
              <form id="formAnak" class="form-horizontal">
                <input type="hidden" name="anak_id" value="">
                <input type="hidden" name="ptk_id" value="">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-4" for="statusAnak">Status *</label>
                  <div class="col-md-7 col-sm-7" data-bind="foreach: refModel.StatusAnak">
                    <label class="radio-inline">
                      <input type="radio" data-bind="value: status_anak_id, checked: BukuIndukPtk.anakModelSelected().statusAnakId">
                      <span data-bind="text: nama"></span>
                    </label>
                  </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-4" for="namaAnak">Nama Anak *</label>
                    <div class="col-md-7 col-sm-7">
                        <input class="form-control input-sm" type="text" data-bind="value: anakModelSelected().nama" placeholder="Nama Anak"/>
                    </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-4" for="jenisKelaminAnak">Jenis Kelamin *</label>
                  <div class="col-md-7 col-sm-7">
                    <label class="radio-inline">
                      <input type="radio" value="true" data-bind="checked: anakModelSelected().jenisKelamin">
                      Laki-laki
                    </label>
                    <label class="radio-inline">
                      <input type="radio" value="false" data-bind="checked: anakModelSelected().jenisKelamin">
                      Perempuan
                    </label>
                  </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-4" for="tempatLahirAnak">Tempat Lahir</label>
                    <div class="col-md-7 col-sm-7">
                        <input class="form-control input-sm" type="text" data-bind="value: anakModelSelected().tempatLahir" placeholder="Tempat Lahir" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-4" for="tanggalLahirAnak">Tanggal Lahir *</label>
                    <div class="col-md-3 col-sm-4">
                        <input class="form-control" data-bind="kendoDatePicker: {value: anakModelSelected().tanggalLahir, format: 'dd/MM/yyyy'}" placeholder="Tanggal Lahir">
                        <span class="help-block">dd/mm/yyyy</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-4" for="jenjanganak">Jenjang *</label>
                    <div class="col-md-7 col-sm-7">
                      <input class="form-control" style="width: 100%" id="jenjangPendidikan" data-bind="kendoDropDownList: { dataTextField: 'nama', dataValueField: 'jenjang_pendidikan_id', data: refModel.JenjangPendidikan, value: anakModelSelected().jenjangPendidikanId, optionLabel: '--pilih jenjang--' }">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-4" for="nisnAnak">NISN</label>
                    <div class="col-md-7 col-sm-7">
                        <input class="form-control input-sm" type="text" data-bind="value: anakModelSelected().nisn" maxlength="10" placeholder="NISN">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-4" for="tahunMasukAnak">Tahun Masuk</label>
                    <div class="col-md-2 col-sm-2">
                        <input class="form-control input-sm" type="text" data-bind="value: anakModelSelected().tahunMasuk" maxlength="4" placeholder="Tahun Masuk"/>
                    </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
              <button type="button" class="btn btn-primary" data-bind="click: saveAnak">Simpan</button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<!--url store-->
<input type="hidden" id="urlPtkApi" value="{{url('api/ptk')}}">
@endsection
@section('script')
<!-- Core !-->
{!! HTML::script('js/core/bukuindukptk.js') !!}
@endsection