$(function () {
    $("#validar").on("click",function (e) {
        var nif=$("#nif").val();
        var jqxhr=$.ajax({
            url:"http://jorgesanchez.net/servicios/validarNIF.php",
            data: {
                nif:nif
            },
            method:"get",
            dataType:"json"
        });
        jqxhr.done(function (data) {
            $("#resultado").empty()
            if (data["error"]["codigo"]==0){
                $("#resultado").append("DNI O NIF VÁLIDO")
                $("#resultado").css("color","green")
            }
            else {
                $("#resultado").append("DNI O NIF NO VÁLIDO")
                $("#resultado").css("color","red")
            }
        })
    })
})