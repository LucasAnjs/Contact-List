$(document).ready(function() {
  $('#table').DataTable({searching: false, info: false});
});

function searchContact() {
  $.post( "Model/contact.php", {contact: $("#search").val()}, (response) => {
    $("#table tbody").html(response);
  });
}