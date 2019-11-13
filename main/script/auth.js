$(function(){
    // User registration ..
    $('#userregisterModalForm').submit(function(){
         var data = $(this).serialize();
         var url = $(this).attr('action');
         
         $.post(url, data, function(e){
            //  console.log(e);
            $('#message').empty();
            $('#message').append(e); 
        });
        return false;
    });
    // User login
    $('#userloginModalForm').submit(function(e){
       e.preventDefault();

        var data = $(this).serialize();
        var url = $(this).attr('action');

        $.post(url, data, function(e){
           if(e.length > 3){
            $('#message').empty();
            $('#message').append(e);
           }else{
            window.location.reload(false); 
           }
           
        })
        
    })
});