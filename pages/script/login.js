$(function() {

    $("#login").click(function() {

        var email = $("#inputEmail").val();
        var password = $("#inputpassword").val();

        $.ajax({
            type: 'POST',
            url: '/core/autenticar.php',
            data: {
                email, password
            },
            success: function(data) {
                window.location = "/index.html";
            },
            error: function(err) {
                window.alert("password incorreta");
            }
        })

    });

});

$.ajax({
    url: "login_reg_insert.php",
    type: "POST",
    data: {
        type: 1,
        name: name,
        email: email,
        username: username,
        phone: phone,
        password: password						
    },
    cache: false,
    success: function(dataResult){
        var dataResult = JSON.parse(dataResult);
        if(dataResult.statusCode==200){
            $("#error").show();
            $('#error_show1').html('Registration successfull Go to Login !'); 	
             v.className += " alert-success";
             $('#register_form').val('');					
        }
        else if(dataResult.statusCode==201){
            $("#error").show();
            $('#error_show1').html('Email ID already exists !');
             v.className += " alert-danger";
            
        }
        else if(dataResult.statusCode==202){
            $("#error").show();
            $('#error_show1').html('Username already exists !');
             v.className += " alert-danger";
        }
        else if(dataResult.statusCode==203){
            $("#error").show();
            $('#error_show1').html('Not Inserted !');
             v.className += " alert-danger";
            
        }
        else if(dataResult.statusCode==204){
            $("#error").show();
            $('#error_show1').html('Please fill all the field!');
             v.className += " alert-danger";
            
        }
        
    }
});