// Obtém os elementos
const especialidade = document.getElementById('especialidade');
const servicosBH = document.getElementById('servicos-BH');
const servicosEL = document.getElementById('servicos-EL');


// Controla a visibilidade dos serviços com base na especialidade selecionada
especialidade.addEventListener('change', () => {
    const selecionado = especialidade.value;


    // Oculta os grupos de serviços específicos
    servicosBH.style.display = 'none';
    servicosEL.style.display = 'none';


    // Exibe o grupo correspondente
    if (selecionado === 'BH') {
        servicosBH.style.display = 'block';
    } else if (selecionado === 'EL') {
        servicosEL.style.display = 'block';
    }
});


// Redireciona para a página de pagamento
document.getElementById('formulario-servico').addEventListener('submit', (e) => {
    e.preventDefault(); // Evita o envio padrão do formulário
    const especialidadeSelecionada = especialidade.value;
    const servicoSelecionado = document.getElementById('servicos').value;


    if (especialidadeSelecionada && servicoSelecionado) {
        const valorServico = 200;  // Valor fixo para o serviço
        const creditoCliente = 40; // Crédito fixo do cliente


        // Monta a URL com parâmetros
        const url = `/pages/pagamento.php?especialidade=${especialidadeSelecionada}&servico=${servicoSelecionado}&valor=${valorServico}&credito=${creditoCliente}`;
        window.location.href = url; // Redireciona para a página de pagamento
    }
});

$('#service_btn').on('click', function () {
    //let service = $('#password_input').val();
    let service = "Consertar Tomada";
    
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