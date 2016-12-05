var BukuIndukPtk = function(){

  var agama = ko.observable("")
  var kewarganegaraan = ko.observable("")
  var pekerjaanSuamiIstri = ko.observable("")
  var statusKepegawaian = ko.observable("")
  var jenisPtk = ko.observable("")
  var statusKeaktifan = ko.observable("")
  var lembagaPengangkat = ko.observable("")
  var sumberGaji = ko.observable("")

  var bukuIndukModel = ko.observable({
    id : ko.observable(),
    agama : ko.observable(),
    alamat : ko.observable(),
    alamatEmail : ko.observable(),
    hp : ko.observable(),
    nomorTelepon : ko.observable(),
    noFax : ko.observable(),
    jenisKelamin : ko.observable(),
    jenisPtk : ko.observable(),
    keahlianBraille : ko.observable(),
    kecamatanKabupatenPropinsi : ko.observable(),
    kelurahanDesa : ko.observable(),
    kewarganegaraan : ko.observable(),
    kodePos : ko.observable(),
    lembagaPengangkat : ko.observable(),
    nama : ko.observable(),
    namaIbu : ko.observable(),
    namaSuamiIstri : ko.observable(),
    nipSuamiIstri : ko.observable(),
    nik : ko.observable(),
    pekerjaanSuamiIstri : ko.observable(),
    pernahDiklatKepegawaian : ko.observable(),
    punyaLisensiKepalaSekolah : ko.observable(),
    statusAktif : ko.observable(),
    statusKepegawaian : ko.observable(),
    statusPerkawinan : ko.observable(),
    sumberGaji : ko.observable(),
    tanggalLahir : ko.observable(new Date()),
    tempatLahir : ko.observable(),
    rt: ko.observable(),
    rw: ko.observable(),
    nokartukeluarga: ko.observable(),
    npwp: ko.observable(),
    nrg : ko.observable(),
    nip : ko.observable(),
    niynigk : ko.observable(),
    nigb : ko.observable(),
    nuptk : ko.observable(),
    skpengangkat: ko.observable(),
    tmtpengangkat: ko.observable(),
    pangkatgolongan : ko.observable()
  })

  var refModel = {
    Agama : ko.observableArray([]),
    Negara : ko.observableArray([]),
    Pekerjaan : ko.observableArray([]),
    StatusKepegawaian : ko.observableArray([]),
    JenisPtk : ko.observableArray([]),
    StatusKeaktifanPegawai : ko.observableArray([]),
    LembagaPengangkat : ko.observableArray([]),
    SumberGaji : ko.observableArray([])
  }

  var isLoading = function (what) {
    $('.apx-loading')[what ? 'show' : 'hide']()
  }

  var data = [{
    status: "test",
    jenjang: "test",
    nisn: "test",
    nama: "test"
  }]

  var createGridAnak = function(data){
    $("#gridAnak").kendoGrid({
      columns: [{
        field: "status",
        title: "Status"
      },{
        field: "jenjang",
        title: "Jenjang"
      },
      {
        field: "nisn",
        title: "NISN"
      },
      {
        field: "nama",
        title: "Nama Anak"
      },
      {
        title: "Opsi", width: 280, template: function(o) {
          return "<button class='btn btn-success' style='margin-right : 3px; width: 90px;'><i class='fa fa-edit'></i> Edit &nbsp;</button><button class='btn btn-danger' style='width: 90px;'><i class='fa fa-trash-o'></i> Delete &nbsp;</button>"
        }
      }],
      dataSource: {
        data: data
      }
    });
  }

  var createGridTugasTambahan = function(){
    $("#gridTugasTambahan").kendoGrid({
      columns: [{
        field: "jabatanptk",
        title: "Jabatan Ptk"
      },{
        field: "namasekolah",
        title: "Nama Sekolah"
      },
      {
        field: "jamperminggu",
        title: "Jam Per Minggu"
      },
      {
        field: "nosk",
        title: "No Sk"
      },
      {
        field: "tmttambahan",
        title: "Tmt Tambahan"
      },
      {
        field: "tsttambahan",
        title: "Tst Tambahan"
      },
      {
        title: "Aksi", width: 280, template: function(o) {
          return "<button class='btn btn-success' style='margin-right : 3px; width: 90px;'><i class='fa fa-edit'></i>&nbsp;</button><button class='btn btn-danger' style='width: 90px;'><i class='fa fa-trash-o'></i>&nbsp;</button>"
        }
      }]
    });
  }

  var createGridJabatanStruktural = function(data){
    $("#gridJabatanStruktural").kendoGrid({
      columns: [{
        field: "jabatanptk",
        title: "Jabatan Ptk"
      },{
        field: "skstruktural",
        title: "SK Struktural"
      },
      {
        field: "tmtjabatan",
        title: "TMT Jabatan"
      },
      {
        title: "Aksi", width: 280, template: function(o) {
          return "<button class='btn btn-success' style='margin-right : 3px; width: 90px;'><i class='fa fa-edit'></i>&nbsp;</button><button class='btn btn-danger' style='width: 90px;'><i class='fa fa-trash-o'></i>&nbsp;</button>"
        }
      }]
    });
  }

  var createGridKepangkatan = function(data){
    $("#gridKepangkatan").kendoGrid({
      columns: [{
        field: "pangkatgolongan",
        title: "Pangkat Golongan"
      },{
        field: "nosk",
        title: "No SK"
      },
      {
        field: "tanggalsk",
        title: "Tanggal SK"
      },
      {
        field: "tmtpangkat",
        title: "TMT Pangkat"
      },
      {
        field: "masakerjatahun",
        title: "Masa Kerja Tahun"
      },
      {
        field: "masakerjabulan",
        title: "Masa Kerja Bulan"
      },
      {
        title: "Aksi", width: 280, template: function(o) {
          return "<button class='btn btn-success' style='margin-right : 3px; width: 90px;'><i class='fa fa-edit'></i>&nbsp;</button><button class='btn btn-danger' style='width: 90px;'><i class='fa fa-trash-o'></i>&nbsp;</button>"
        }
      }]
    });
  }

  var createGridJabatanFungsional = function(data){
    $("#gridJabatanFungsional").kendoGrid({
      columns: [{
        field: "jabatanfungsional",
        title: "Jabatan Fungsional"
      },{
        field: "skjabatanfungsional",
        title: "Sk Jabatan Fungsional"
      },
      {
        field: "tmtjabatan",
        title: "TMT Jabatan"
      },
      {
        title: "Aksi", width: 280, template: function(o) {
          return "<button class='btn btn-success' style='margin-right : 3px; width: 90px;'><i class='fa fa-edit'></i>&nbsp;</button><button class='btn btn-danger' style='width: 90px;'><i class='fa fa-trash-o'></i>&nbsp;</button>"
        }
      }]
    });
  }

  var createGridPendidikanFormal = function(data){
    $("#gridPendidikanFormal").kendoGrid({
      columns: [{
        field: "satuanpendidikan",
        title: "Satuan Pendidikan"
      },{
        field: "fakultas",
        title: "Fakultas"
      },
      {
        field: "kependidikan",
        title: "Kependidikan"
      },
      {
        field: "tahunmasuk",
        title: "Tahun Masuk"
      },
      {
        field: "tahunlulus",
        title: "Tahun Lulus"
      },
      {
        title: "Aksi", width: 280, template: function(o) {
          return "<button class='btn btn-success' style='margin-right : 3px; width: 90px;'><i class='fa fa-edit'></i>&nbsp;</button><button class='btn btn-danger' style='width: 90px;'><i class='fa fa-trash-o'></i>&nbsp;</button>"
        }
      }]
    });
  }

  var createGridBeasiswa = function(data){
    $("#gridBeasiswa").kendoGrid({
      columns: [{
        field: "jenis",
        title: "Jenis"
      },{
        field: "penyelenggara",
        title: "Penyelenggara"
      },
      {
        field: "daritahun",
        title: "Dari Tahun"
      },
      {
        field: "sampaitahun",
        title: "Sampai Tahun"
      },
      {
        field: "masihmenerima",
        title: "Masih Menerima"
      },
      {
        title: "Aksi", width: 280, template: function(o) {
          return "<button class='btn btn-success' style='margin-right : 3px; width: 90px;'><i class='fa fa-edit'></i>&nbsp;</button><button class='btn btn-danger' style='width: 90px;'><i class='fa fa-trash-o'></i>&nbsp;</button>"
        }
      }]
    });
  }

  var createGridBeasiswaBuku = function(data){
    $("#gridBeasiswaBuku").kendoGrid({
      columns: [{
        field: "judulbuku",
        title: "Judul Buku"
      },{
        field: "tahun",
        title: "Tahun"
      },
      {
        field: "penerbit",
        title: "Penerbit"
      },
      {
        title: "Aksi", width: 280, template: function(o) {
          return "<button class='btn btn-success' style='margin-right : 3px; width: 90px;'><i class='fa fa-edit'></i>&nbsp;</button><button class='btn btn-danger' style='width: 90px;'><i class='fa fa-trash-o'></i>&nbsp;</button>"
        }
      }]
    });
  }

  var awal = function(){
    isLoading(true)
    var urlFull = $("#urlPtkApi").val() +"/"+$("#Id").val()
    $.get(urlFull, function(data){

      refModel.Agama(data.Agama)
      refModel.Negara(data.Negara)
      refModel.Pekerjaan(data.Pekerjaan)
      refModel.StatusKepegawaian(data.StatusKepegawaian)
      refModel.JenisPtk(data.JenisPtk)
      refModel.StatusKeaktifanPegawai(data.StatusKeaktifanPegawai)
      refModel.LembagaPengangkat(data.LembagaPengangkat)
      refModel.SumberGaji(data.SumberGaji)

      bukuIndukModel(ko.mapping.fromJS(data.ptk))

      agama(bukuIndukModel().agama())
      kewarganegaraan(bukuIndukModel().kewarganegaraan())
      pekerjaanSuamiIstri(bukuIndukModel().pekerjaanSuamiIstri())
      statusKepegawaian(bukuIndukModel().statusKepegawaian())
      jenisPtk(bukuIndukModel().jenisPtk())
      statusKeaktifan(bukuIndukModel().statusAktif())
      lembagaPengangkat(bukuIndukModel().lembagaPengangkat())
      sumberGaji(bukuIndukModel().sumberGaji())

      bukuIndukModel().jenisKelamin(bukuIndukModel().jenisKelamin()?bukuIndukModel().jenisKelamin().toString():"false")
      bukuIndukModel().punyaLisensiKepalaSekolah(bukuIndukModel().punyaLisensiKepalaSekolah()?bukuIndukModel().punyaLisensiKepalaSekolah().toString():"false")
      bukuIndukModel().pernahDiklatKepegawaian(bukuIndukModel().pernahDiklatKepegawaian()?bukuIndukModel().pernahDiklatKepegawaian().toString():"false")
      bukuIndukModel().keahlianBraille(bukuIndukModel().keahlianBraille()?bukuIndukModel().keahlianBraille().toString():"false")

      // Data(data.Ptk)
      // createGrid(Data())
      // isLoading(false)
    })

    createGridAnak(data)
    createGridTugasTambahan()
    createGridJabatanStruktural()
    createGridKepangkatan()
    createGridJabatanFungsional()
    createGridPendidikanFormal()
    createGridBeasiswa()
    createGridBeasiswaBuku()
    isLoading(false)
  }

  var save = function(){
    param = ko.mapping.toJS(bukuIndukModel())
    console.log(param.rt)
  }

  var init = function(){
    ko.applyBindings(BukuIndukPtk);
    awal();
  }

  $(init);

  return {
    bukuIndukModel : bukuIndukModel,
    refModel : refModel,
    save : save,
    agama : agama,
    kewarganegaraan : kewarganegaraan,
    pekerjaanSuamiIstri : pekerjaanSuamiIstri,
    statusKepegawaian : statusKepegawaian,
    jenisPtk : jenisPtk,
    statusKeaktifan : statusKeaktifan,
    lembagaPengangkat : lembagaPengangkat,
    sumberGaji : sumberGaji
  }
}()