$(function () {
    var jqxhr = $.ajax({
        url: "obtenerComunidades.php",
        method: "get",
        dataType: "json"
    });
    jqxhr.done(function (data) {
        var comunidades = data["comunidades"];
        for (var comunidad of comunidades) {
            $("#comunidad").append("<option value='" + comunidad["n_comunidad"] + "'>" + comunidad["nombre"] + "</option>")
        }
    })
    $("#comunidad").on("change", function (e) {
        $("#provincia").empty();
        jqxhr = $.ajax({
            url: "obtenerProvincias.php",
            method: "get",
            dataType: "json",
            data: {
                comunidad: $(this).val()
            }
        });
        jqxhr.done(function (data) {
            var provincias=data["provincias"];
            console.log(data);
            for (var provincia of provincias){
                $("#provincia").append("<option value='"+provincia["n_provincia"] +"'>"+provincia["nombre"]+"</option>")
            }

        })
    })
})

