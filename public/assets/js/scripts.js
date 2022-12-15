$(function () {
  $("#jabatan-table").DataTable({
    processing: true,
    serverSide: true,
    ajax: {
      url: "http://localhost:8080/admin/jabatan/json",
    },
    columns: [
      { data: "id_jabatan", name: "id_jabatan" },
      { data: "nama_jabatan", name: "nama_jabatan" },
      { data: "uang_lembur", name: "uang_lembur" },
      { data: "uang_makan", name: "uang_makan" },
      { data: "aksi", name: "aksi" },
    ],
    responsive: true,
    lengthChange: false,
    autoWidth: false,
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
  });

  $("#wilayah-table").DataTable({
    processing: true,
    serverSide: true,
    ajax: {
      url: "http://localhost:8080/admin/wilayah/json",
    },
    columns: [
      { data: "id_wilayah", name: "id_wilayah" },
      { data: "nama_wilayah", name: "nama_wilayah" },
      { data: "aksi", name: "aksi" },
    ],
    responsive: true,
    lengthChange: false,
    autoWidth: false,
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
  });

  $("#pegawai-table").DataTable({
    processing: true,
    serverSide: true,
    ajax: {
      url: "http://localhost:8080/admin/pegawai/json",
    },
    columns: [
      { data: "id_pegawai", name: "id_pegawai" },
      { data: "nama_pegawai", name: "nama_pegawai" },
      { data: "nip", name: "nip" },
      { data: "password", name: "password" },
      { data: "nama_jabatan", name: "nama_jabatan" },
      { data: "nama_wilayah", name: "nama_wilayah" },
      { data: "aksi", name: "aksi" },
    ],
    responsive: true,
    lengthChange: false,
    autoWidth: false,
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
  });

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
