$(document).ready(function(){

    buscarMembros();
    $('#membros').delegate('.excluir','click',function () {
        var id = $(this).data('codigomembro');
        bootbox.confirm({
            title: '<h3 class="modal-title " id="modal-title">Confirmar exclusão <i class="fa pull-right fa-trash-o"> </i></h3>',
            message: '<h3>Esse registro será deletado permanentemente, deseja prosseguir?</h3>',
            buttons:{
                confirm: {
                    label: 'Deletar',
                    className: 'btn-danger'
                },
                cancel: {
                    label: 'Cancelar',
                    className: 'btn-default'
                }
            },
            callback:function (response) {
                if(response)
                    deletarMembro(id);
            },
            className: "modal-delete"
        });
    });


    $('#membros').delegate('.editar','click',function () {
        var id = $(this).data('codigomembro');
        carregarMembro(id);

    });

    $('#frmMembro').submit(function (e) {
        e.preventDefault();
        inserirMembro(this);
    });

});



function nl2br(string) {
    return string.replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + '<br>' + '$2');

}

function buscarMembros() {
    $.ajax({
        url: '../controller/listarMembros.php',
        success: function (response) {
            response = JSON.parse(response);
            listarMembros(response);
        }

    });
}

function carregarMembro(id) {
    $.ajax({
        url: '../controller/getMembro.php',
        data: {codigo: id},
        method: 'POST',
        success: function (response) {
            response = JSON.parse(response);
            $('#nomeMembro').val(response.nomeMembro);
            $('#descricaoMembro').text(response.sobreMembro);
            $('#codigoMembro').val(response.codigoMembro);
        }

    });
}


function listarMembros(membros) {
    $('#membros').empty();
    for (var index in membros){
        membros[index].sobreMembro = nl2br(membros[index].sobreMembro);
        $('#membros').append(
            '<div class="col-sm-4 col-xs-12 foto-equipe text-center">'+
                '<img src="'+membros[index].enderecoImagemMembro+'" class="img-rounded img-responsive" alt="">'+
            '</div>'+
            '<div class="col-xs-12 col-sm-8">'+
              '<h2>'+membros[index].nomeMembro+
              "<button data-codigoMembro='"+membros[index].codigoMembro+"' class='excluir btn' href='#'> <i class='fa fa-remove'></i></button></h2>"+
            '<p class="text-left">'+
            '<br>'+
            membros[index].sobreMembro+
            '</p>'+

            '<div id="editar-contato-wrapper" class="col-xs-12 col-sm-offset-11">'+
                '<div class="form-group">'+
                    '<button data-toggle="modal"  data-target="#modal-membro" class="btn editar btn-warning" data-codigoMembro="'+membros[index].codigoMembro+'">Editar</button>'+
                '</div>'+
            '</div>'+

            '<div class="col-xs-12"><hr></div>'


        );

    }
}

function deletarMembro(codigo) {
    $.ajax({

        url: '../controller/deletarMembro.php',
        data: {codigo: codigo},
        method:'POST',
        success: function (response) {
            bootbox.alert({title:'Mensagem do sistema', message:response});
            buscarMembros();
        }

    });
}

function inserirMembro(form) {
    $.ajax({

        method  : 'POST',
        url     : '../controller/inserirMembro.php',
        processData: false,
        data: new FormData(form), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        contentType: false,       // The content type used when sending data to the server.
        cache: false,             // To unable request pages to be cached
        success: function(response){
            $('#modal-membro').modal('hide');
            bootbox.alert({title:'Mensagem do sistema', message:response});
            buscarMembros();
            $('form').reset();
        }

    });
}

