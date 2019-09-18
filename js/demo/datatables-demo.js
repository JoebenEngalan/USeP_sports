// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable();
});

$('#dataTable').DataTable( {
  dom: 'Bfrtip',
  buttons: [
      'copyHtml5',
      'excelHtml5',
      'pdfHtml5',
      'print'
  ]
} );
