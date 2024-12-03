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
                type: "GET",
                data: {
                    email: email,
                    password: password
                },
                success: data => {
                    $('#register_form').val('');
                    window.alert('Conta cadastrada!');
                    location.href = "/index.php";
                },
                error: function (xhr, status, error) {
                    console.error("Error occurred: " + status + " - " + error);
                    window.alert("Ocorreu um erro " + status + " - " + error);
                }
            });
        }
    });
});
