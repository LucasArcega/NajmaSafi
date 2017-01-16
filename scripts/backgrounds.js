/**
 * Created by lucas on 30/11/2016.
 */

$(document).ready(function () {

    $('#frmBackground').submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "../controller/alterarBackground.php", // Url to which the request is send
            type: "POST",             // Type of request to be send, called as method
            data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData: false        // To send DOMDocument or non processed data file it is set to false
        }).done(function (retorno) {

            bootbox.alert({
                title:"Mensagem do sistema:",
                message:"<h5 style='font-size: 15px'>"+retorno+"</h5>",
                callback: function () {
                location.reload();
                }
            });
        });
    });

    }
);



