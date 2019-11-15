$(function(){
  
  // User registration ..
  $('#custom_order').submit(function(){
    var data = $(this).serialize();
    var url = $(this).attr('action');
    console.log(data.user_id.length);
   if(empty(data.user_id)){
       $('#message').empty();
        $('#message').append('Login to place custom order');
        
   }else{
    $.post(url, data, function(e){
         console.log(e);
       $('#message').empty();
       $('#message').append(e); 
       $('#order').attr('hidden', true);
   });
}
   return false;
});
    
})