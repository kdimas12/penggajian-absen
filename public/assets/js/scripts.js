$(function () {
  // $("#jabatan-table")
  //   .DataTable({
  //     responsive: true,
  //     lengthChange: false,
  //     autoWidth: false,
  //     buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
  //   })
  //   .buttons()
  //   .container()
  //   .appendTo("#example1_wrapper .col-md-6:eq(0)");
  $("#jabatan-table").DataTable({
    paging: true,
    lengthChange: false,
    searching: false,
    ordering: true,
    info: true,
    autoWidth: true,
    responsive: true,
  });
});
