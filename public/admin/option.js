$(document).ready(function(){
$('#leagus_option').change(function() {
  var value = document.getElementById("leagus_option").value;
$.ajax({
       type: 'GET', //THIS NEEDS TO BE GET
       url: '/leagues/team?league_id='+value,
       dataType: 'json',
       success: function (data) {
          $('#team_option').empty();
            $('#team_option2').empty();
            if (data.length > 0) {
        $.each(data, function(index, item) {
          $('#team_option').append('<option value="'+item['id']+'">'+item['name']+'</option>');
         $('#team_option2').append('<option value="'+item['id']+'">'+item['name']+'</option>');

           });
         }else {
           $('#team_option').append('<option value="0">Not Have Team</option>');
           $('#team_option2').append('<option value="0">Not Have Team</option>');
         }
       },error:function(){
         $('#team_option').append('<option value="0">Not Have Team</option>');
       }
   });
});

//  Edit

$('#leagus_option_edit').change(function() {
  var value = document.getElementById("leagus_option_edit").value;
$.ajax({
       type: 'GET', //THIS NEEDS TO BE GET
       url: '/leagues/team?league_id='+value,
       dataType: 'json',
       success: function (data) {
            $('#team_option').empty();
            if (data.length > 0) {
        $.each(data, function(index, item) {
          $('#team_option').append('<option value="'+item['id']+'">'+item['name']+'</option>');
         $('#team_option2').append('<option value="'+item['id']+'">'+item['name']+'</option>');

           });
         }else {
           $('#team_option').append('<option value="0">Not Have Team</option>');
           $('#team_option2').append('<option value="0">Not Have Team</option>');
         }
       },error:function(){
         $('#team_option').append('<option value="0">Not Have Team</option>');
       }
   });
});



 });
