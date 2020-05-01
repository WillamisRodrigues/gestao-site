$(".fechar").click(function () {
    $("#painel-banner").toggle("slow");
});

$(document).on('click', '.edit_banner', function () {
    var id = $(this).attr('data-id');
    $('#form_result').html('');
    
    $.ajax({
        url: "/editar_lead_aluno/" + id + "/edit",
        dataType: "json",
        success: function (html) {
           // $('#nome').val(html.data.pag_nome);
            $("#painel-banner").toggle("slow");

        }
    });

});

$(function () {

    var table = $('#banners').DataTable({
        processing: true,
        serverSide: true,
        ajax: "/lista_banner",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'titulo', name: 'titulo' },
            { data: 'url', name: 'url' },
            { data: 'status', name: 'status' },
            { data: 'action', name: 'action' }

        ],
        "language": {
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            },
            "select": {
                "rows": {
                    "_": "Selecionado %d linhas",
                    "0": "Nenhuma linha selecionada",
                    "1": "Selecionado 1 linha"
                }
            }
        }

    });
});