$(document).ready(function () {
    // register
    $('#butsave').on('click', function () {
        var email = $('#email_input').val();
        var password = $('password_input').val();
        var confirm_password = $('#password_confirm_input').val();

        if (email == "" || password == "") {
            window.alert('Preencha os campos!');
        }
        else if (password != confirm_password) {
            window.alert('passwords são diferentes!');
        }
        else {

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
                success: function (dataResult) {
                    var dataResult = JSON.parse(dataResult);
                    if (dataResult.statusCode == 200) {
                        $("#error").show();
                        $('#error_show1').html('Registration successfull Go to Login !');
                        v.className += " alert-success";
                        $('#register_form').val('');
                    }
                    else if (dataResult.statusCode == 201) {
                        $("#error").show();
                        $('#error_show1').html('Email ID already exists !');
                        v.className += " alert-danger";

                    }
                    else if (dataResult.statusCode == 202) {
                        $("#error").show();
                        $('#error_show1').html('Username already exists !');
                        v.className += " alert-danger";
                    }
                    else if (dataResult.statusCode == 203) {
                        $("#error").show();
                        $('#error_show1').html('Not Inserted !');
                        v.className += " alert-danger";

                    }
                    else if (dataResult.statusCode == 204) {
                        $("#error").show();
                        $('#error_show1').html('Please fill all the field!');
                        v.className += " alert-danger";

                    }

                }
            });
        }

    });

    // login
    $('#butlogin').on('click', function () {
        $("#error1").hide();
        var v = document.getElementById("error1");
        var username = $('#email_log').val();
        var password = $('#password_log').val();
        setTimeout(function () { $("#error1").fadeOut(1000); }, 3000);
        if (username == "" && password == "") {
            $("#error1").show();
            $('#error_show12').html('Please fill all the field!');
            v.className += " alert-danger";
        }
        else {
            $.ajax({
                url: "login_reg_insert.php",
                type: "POST",
                data: {
                    type: 2,
                    username: username,
                    password: password
                },
                cache: false,
                success: function (dataResult) {
                    var dataResult = JSON.parse(dataResult);
                    if (dataResult.statusCode == 200) {
                        location.href = "home.php";
                    }
                    else if (dataResult.statusCode == 201) {
                        $("#error1").show();
                        $('#error_show12').html('Invalid EmailId or Password !');
                        v.className += " alert-danger";
                    }

                }
            });
        }

    });
});
