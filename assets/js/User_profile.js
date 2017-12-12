$(document).ready(function(){
    var url = 'https://basic-templating-nachovz.c9users.io/controllers/login.php';
        
        $.ajax({
            type        : 'GET', // define the type of HTTP verb we want to use (POST for our form)
            url         : url, // the url where we want to POST
            dataType        : 'json' // our data object
             // what type of data do we expect back from the server
        }).done(function(response){
            
            console.log(response);
            //END - Configure and Execute ajax call.
            
            response = JSON.parse(data);
            
            if(response.code === 200){
               
            }else{
                //$("#loginErrorMessageInvalid").show();
            }
        });
})