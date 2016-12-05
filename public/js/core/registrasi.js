var Registrasi = function(){
  var RegistrasiModel = {
    identitasPendidikDanTenagaKependidikan : {
      nama : ko.observable(""),
      nik : ko.observable(""),
      jenisKelamin : ko.observable("true"),
      tempatLahir : ko.observable(""),
      tanggalLahir : ko.observable(new Date().toString()),
      namaIbu : ko.observable("")
    },
    dataPribadi : {
      alamat : ko.observable(""),
      kelurahanDesa : ko.observable(""),
      kecamatanKabupatenPropinsi : ko.observable(""),
      kodePos : ko.observable(""),
      agama : ko.observable(""),
      kewarganegaraan : ko.observable("ID"),
      statusPerkawinan : ko.observable(""),
      namaSuamiIstri : ko.observable(""),
      pekerjaanSuamiIstri : ko.observable("")
    },
    kepegawaian : {
      statusKepegawaian : ko.observable(""),
      jenisPtk : ko.observable(""),
      statusAktif : ko.observable(""),
      lembagaPengangkat : ko.observable(""),
      sumberGaji : ko.observable("")
    },
    kompetensiKhusus : {
      punyaLisensiKepalaSekolah : ko.observable("false"),
      pernahDiklatKepegawaian : ko.observable("false"),
      keahlianBraille : ko.observable("false")
    },
    kontak : {
      hp : ko.observable(""),
      alamatEmail : ko.observable("")
    }
  }

  var RefModel = ko.observable({
    Agama : ko.observableArray([]),
    Negara : ko.observableArray([]),
    Pekerjaan : ko.observableArray([]),
    StatusKepegawaian : ko.observableArray([]),
    JenisPtk : ko.observableArray([]),
    StatusKeaktifanPegawai : ko.observableArray([]),
    LembagaPengangkat : ko.observableArray([]),
    SumberGaji : ko.observableArray([]),
  })

  var save = function(){
    return function(){
      var urlFull = '/pkllia/public/register'

      RegistrasiModel.identitasPendidikDanTenagaKependidikan.tanggalLahir(moment(RegistrasiModel.identitasPendidikDanTenagaKependidikan.tanggalLahir()).format("YYYY-MM-DD"))

      param = ko.mapping.toJS(RegistrasiModel)

      $.post(urlFull, ko.mapping.toJS(RegistrasiModel), function(data){
        swal({
          title: 'Sukses',
          text: 'Sukses Insert Data',
          type: 'success'
        })
      })
    }
  }

  var awal = function(){
    isLoading(true)
    var urlFull = '/pkllia/public/api/ptk'
    $.get(urlFull, function(data){
      RefModel().Agama(data.Agama)
      RefModel().Negara(data.Negara)
      RefModel().StatusKepegawaian(data.StatusKepegawaian)
      RefModel().JenisPtk(data.JenisPtk)
      RefModel().Pekerjaan(data.Pekerjaan)
      RefModel().StatusKeaktifanPegawai(data.StatusKeaktifanPegawai)
      RefModel().LembagaPengangkat(data.LembagaPengangkat)
      RefModel().SumberGaji(data.SumberGaji)

      isLoading(false)
    })
  }

  var isLoading = function (what) {
    $('.apx-loading')[what ? 'show' : 'hide']()
  }

  var init = function(){
    ko.bindingHandlers.kendoDropDownList.options.filter = 'startswith';
    ko.applyBindings(Registrasi);
    awal();
  }

  $(init)

  return {
    RegistrasiModel : RegistrasiModel,
    RefModel : RefModel,
    save : save,
    isLoading : isLoading
  }
}();