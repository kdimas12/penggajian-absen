$(function () {
  $("#jabatan-table")
    .DataTable({
      responsive: true,
      lengthChange: false,
      autoWidth: false,
      buttons: ["copy", "csv", "excel", "pdf", "print"],
      language: {
        sProcessing: "Sedang memproses ...",
        lengthMenu: "Tampilkan _MENU_ data per halaman",
        zeroRecord: "Maaf data tidak tersedia",
        info: "Menampilkan _PAGE_ halaman dari _PAGES_ halaman",
        infoEmpty: "Tidak ada data yang tersedia",
        infoFiltered: "(difilter dari _MAX_ total data)",
        sSearch: "Cari",
        oPaginate: {
          sFirst: "Pertama",
          sPrevious: "Sebelumnya",
          sNext: "Selanjutnya",
          sLast: "Terakhir",
        },
      },
    })
    .buttons()
    .container()
    .appendTo("#jabatan-table_wrapper .col-md-6:eq(0)");

  $("#form-jabatan").validate({
    rules: {
      nama_jabatan: {
        required: true,
      },
      uang_lembur: {
        required: true,
      },
      uang_makan: {
        required: true,
      },
    },
    messages: {
      nama_jabatan: "Nama Jabatan harus diisi!",
      uang_lembur: "Uang lembur harus diisi!",
      uang_makan: "Uang makan harus diisi!",
    },
    errorElement: "span",
    errorPlacement: function (error, element) {
      error.addClass("invalid-feedback");
      element.closest(".form-group").append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass("is-invalid");
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass("is-invalid");
    },
  });
});
