/**
 * Created by lucas on 16/01/2017.
 */



function buscarMembros() {
    $.ajax({
        url: '../controller/listarMembros.php',
        success: function (response) {
            response = JSON.parse(response);
            listarMembros(response);

        }

    });
}

function listarMembros(membros) {
    for (var index in response){
        response[index].sobreMembro = nl2br(response[index].sobreMembro);
        $('#membros').append(
            '<div class="col-sm-4 col-xs-12 foto-equipe text-center">'+
            '<img src="'+response[index].enderecoImagemMembro+'" class="img-rounded img-responsive" alt="">'+
            '</div>'+
            '<div class="col-xs-12 col-sm-8">'+
            '<h2>'+response[index].nomeMembro+'</h2>'+
            '<p class="text-left">'+
            '<br>'+
            response[index].sobreMembro+
            '</p>'+

            '</div>'+
            '<div class="col-xs-12"><hr></div>'+
            '<hr>'

        );

    }
}


function inserirMembro() {
    $.ajax({

        method  : 'POST',
        url     : '../controller/inserirMembro.php',
        processData: false,
        data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        contentType: false,       // The content type used when sending data to the server.
        cache: false             // To unable request pages to be cached

    });
}