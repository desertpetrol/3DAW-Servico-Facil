$(function() {

    // Acionar indicativo de carregamento
    $(".spinner-border").css({display: "block"});

    $.ajax({
        type: "GET",
        url: "/core/getTasks.php",
        success: (data) => {
            console.log(data);
            // Parar indicativo de carregamento
            $(".spinner-border").css({display: "none"});
            // Carregar miolo da tabela com os dados
            const servicos = JSON.parse(data);
            servicos.forEach(servico => {
                adicionarLinhaNaTabela(servico);
            });
        },
        error: (xhr,status,error) => {
            window.alert(xhr,status,error);
        }
    });

});

function adicionarLinhaNaTabela(servico) {
    $("<tr><td id='servico_descricao_" + servico.id + "'>" + 
        servico.task + "</td><td>" + 
        servico.date_init + "</td><td>" + 
        (servico.date_end == "null" ? servico.date_end : "----") + "</td><td>" +
        servico.status +

        "</td></tr>").appendTo($("#corpoTabela"));
}
