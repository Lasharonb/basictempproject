//Set the initial state of the website
$(document).ready(function(){
   $("#loginErrorMessage").hide();
   $("#loginErrorMessageInvalid").hide();
   $("#logoutButton").hide();
});
//END - Set the initial state of the website

//click event for the login button (the one inside the modal).
$("#loginButton").click(function (){
    //Validated the information inside the form's inputs.
    var loginEmail = $.trim( $("#staticEmail").val() );
    var loginPassword = $.trim( $("#inputPassword").val() );
    
    if(loginEmail.length > 0 && loginPassword.length > 0){
        //END - Validated the information inside the form's inputs.
        
        //Configure and Execute ajax call.
        //$("#loginErrorMessage").hide();
        
        var formData = {
            'email_info': loginEmail,
            'password_info': loginPassword
        };
        
        
        var url = 'https://basic-templating-nachovz.c9users.io/controllers/login.php';
        
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : url, // the url where we want to POST
            data        : formData // our data object
            //dataType    : 'json' // what type of data do we expect back from the server
        }).done(function(data){
            console.log(data);
            //END - Configure and Execute ajax call.
            
            response = JSON.parse(data);
            
            if(response.code === 200){
                $("#loginModal").modal('hide');
                $("#loginModalButton").hide();
                $("#logoutButton").show();
                $("#loggedUserEmail").html(response.data);
                
            }else{
                $("#loginErrorMessageInvalid").show();
            }
        });
        
    }else{
        $("#loginErrorMessage").show();
    }
});