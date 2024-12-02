$(document).ready(function () {
    // register
    $('#signin_btn').on('click', function () {
        let email = $('#email_input').val();
        let password = $('#password_input').val();
        let confirm_password = $('#password_confirm_input').val();

        if (!email) {
            window.alert('Preencha o email!');
        }
        else if (!password) {
            window.alert('Preencha a senha!');
        }
        else if (password != confirm_password) {
            window.alert('senhas são diferentes!');
        }
        else {

            $.ajax({
                url: "/core/signIn.php",
                type: "POST",
                data: {
                    email: email,
                    password: password
                },
                success: data => {
                    if (data.statusCode == 200) {;
                        $('#register_form').val('');
                        location.href = "/index.php";
                        window.alert('Conta cadastrada!');
                    }
                    else if (data.statusCode == 409) {
                        window.alert('Email ja cadastrado!');

                    }
                    else if (data.statusCode == 204) {
                        window.alert('Peencha todos os campos!');
                    }
                }
            });
        }
    });
});
