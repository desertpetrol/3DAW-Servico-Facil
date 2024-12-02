$('#service_btn').on('click', function () {
    //let service = $('#password_input').val();
    let service = "consertar geladeira";
    
    if (service == "") {
        window.alert("Preencha todos os campos!")
    }
    else {
        $.ajax({
            url: "/core/createTask.php",
            type: "POST",
            data: {
                service: service,
            },
            cache: false,
            dataType: "json",
            success: dataResult => {
                if (dataResult.statusCode === 201) {
                    window.alert("Serviço requisitado com sucesso");
                    location.href = "/pages/servicos.php";
                    $('#service_form').val('');

                } else if (dataResult.statusCode === 400) {
                    window.alert("Erro ao criar serviço");
                }
            },
            error: function (xhr, status, error) {
                console.error("Error occurred: " + status + " - " + error);
                window.alert("Ocorreu um erro inesperado. Por favor, tente novamente.");
            }
        });
    }

});