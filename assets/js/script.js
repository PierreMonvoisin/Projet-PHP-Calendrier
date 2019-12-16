$(function(){
  $('#submitButton').prop('disabled', true);
  $(document).click(function(){
    if ($('#year').val() == null || $('#month').val() == null){
      $('#submitButton').prop('disabled', true);
    } else (
      $('#submitButton').prop('disabled', false)   
    )
    console.log($('#year').val());
    console.log($('#month').val());
  })
});
