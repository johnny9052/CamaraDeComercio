

$(document).ready(function () {
    /*Se obtienen los datos almacenados en cache, y parseando el JSON a un objeto*/
    try {
        var obj = JSON.parse(localStorage['objRenovacionRegistroMercantilSecurity']);

        console.log(obj.imageRoute);
        if (obj.imageRoute) {
            $("#pic").attr('src', obj.imageRoute);
        } else {
            $("#pic").css("display", "none");
        }
    } catch (e) {
        $("#pic").css("display", "none");
    }

});



function saveScreen1() {

    /*Funcion que valida todos los campos que se encuentren internos al 
     * elemento con id FormContainer, indicando cuales estan mal diligenciados*/
    if (validateForm()) {

        /*Se obtienen los valores de los campos por ID*/
        var nit = $("#txtNit").val();
        var nombreRepresentante = $("#txtNombreRepresentante").val();
        var departamento = $("#selDepartamento").val();
        var municipio = $("#selMunicipio").val();
        var sucursales = $("#txtSucursales").val();

        /*Se crea un objeto con la info recuperada*/
        var obj = {
            nit: nit,
            nombreRepresentante: nombreRepresentante,
            departamento: departamento,
            municipio: municipio,
            sucursales: sucursales
        };

        /*En cache se crea una variable llamada objRenovacionRegistroMercantilScreen1, 
         * la cual almacena el objeto en formato JSON, ya que la cache solo almacena 
         * datos primitivos*/
        localStorage['objRenovacionRegistroMercantilScreen1'] = JSON.stringify(obj); // only strings

        /*Se refresta indicando que se debe cargar la Screen2*/
        location.href = "?Page=Screen2";
    }

}
