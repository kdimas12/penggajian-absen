$(function () {
  $("#jabatan-table")
    .DataTable({
      responsive: true,
      lengthChange: false,
      autoWidth: false,
      buttons: ["copy", "csv", "excel", "pdf", "print"],
    })
    .buttons()
    .container()
    .appendTo("#jabatan-table_wrapper .col-md-6:eq(0)");
});
