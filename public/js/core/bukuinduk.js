var BukuInduk = function(){
  var Data = ko.observableArray([])

  var awal = function(){
    isLoading(true)
    var urlFull = $("#urlPtkAll").val()
    $.get(urlFull, function(data){
      Data(data.Ptk)
      createGrid(Data())
      isLoading(false)
    })
  }

  var createGrid = function(data){
    var urlBukuInduk = $("#urlBukuInduk").val()
    $("#gridPtk").kendoGrid({
      columns: [{
        field: "nama",
        title: "Nama"
      },{
        field: "nik",
        title: "Nip"
      },
      {
        title: "Opsi", width: 280, template: function(o) {
          return "<a class='btn btn-success' href='"+urlBukuInduk+"/"+o.id+"' style='margin-right : 3px; width: 90px;'><i class='fa fa-edit'></i>&nbsp;Buku Induk</a><a class='btn btn-danger' style='width: 90px;'><i class='fa fa-trash-o'></i>&nbsp;Mutasi</a>"
        }
      },],
      dataSource: {
          data: data
      }
    });
  }
  var isLoading = function (what) {
    $('.apx-loading')[what ? 'show' : 'hide']()
  }

  var init = function(){
    ko.applyBindings(BukuInduk);
    awal();
  }

  $(init);

  return {
    Data: Data,
    isLoading: isLoading
  }
}();