// login
$('#login_btn').on('click', function () {
    let email = $('#email_input').val();
    let password = $('#password_input').val();
    
    if (email == "" || password == "") {
        window.alert("Preencha todos os campos!")
    }
    else {
        $.ajax({
            url: "/core/logIn.php",
            type: "GET",
            data: {
                email: email,
                password: password
            },
            cache: false,
            dataType: "json",
            success: function (dataResult) {
                    location.href = "/pages/servicos.php";
            },
            error: function (xhr, status, error) {
                console.error("Error occurred: " + status + " - " + error);
                window.alert("Ocorreu um erro " + status + " - " + error);
            }
        });
    }

});