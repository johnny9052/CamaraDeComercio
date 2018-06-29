/*Variable global para acceder al total de sucursales*/
var totalSucursales;

$(document).ready(function () {
    /*Se obtienen los datos almacenados en cache, y parseando el JSON a un objeto*/
    var obj = JSON.parse(localStorage['objRenovacionRegistroMercantilScreen1']);
    /*Se obtiene el total de la sucursales del objeto*/
    totalSucursales = parseInt(obj.sucursales);
    /*Se llama la funcion que se encarga de crear los campos segun la cantidad 
     * se sucursales*/
    buildSucursales(totalSucursales);
});


function buildSucursales(totalSucursales) {

    /*Se coloca el campo de total activos, debido a que siempre va*/
    var estructura = '<div class="form-group has-feedback">' +
            '<input type="number" id="txtTotalActivos" placeholder="Total activos" required class="form-control" required>' +
            '<span class="glyphicon glyphicon-list form-control-feedback"></span>' +
            '</div>';

    /*Por cada sucursal, se generan 3 campos (ActivosSucursal, Departamento, Municipio)*/
    for (var x = 1; x <= totalSucursales; x++) {
        estructura = estructura +
                '<div class="box box-primary">' +
                '<div class="form-group has-feedback">' +
                '<input type="number" id="txtActivosSucursal' + x + '" class="form-control" placeholder="Activos sucursal ' + x + '" required>' +
                '<span class="glyphicon glyphicon glyphicon-usd form-control-feedback"></span>' +
                '</div>' +
                '<div class="form-group">' +
                '<select id="selDepartamento' + x + '" required class="form-control" style="width: 100%;">' +
                '<option value="-1" selected> -- SELECCIONE DEPARTAMENTO --</option>' +
                '<option value="1" >CALDAS</option>' +
                '<option value="2" >RISARALDA</option>' +
                '<option value="3" >QUINDIO</option>' +
                '</select>' +
                '</div>' +
                '<div class="form-group">' +
                '<select id="selMunicipio' + x + '"  required class="form-control" style="width: 100%;">' +
                '<option value="-1" > -- SELECCIONE MUNICIPIO --</option>' +
                '<option value="1" >ARMENIA</option>' +
                '<option value="2" >DOSQUEBRADAS</option>' +
                '<option value="3" >MANIZALES</option>' +
                '<option value="4" >PEREIRA</option>' +
                '</select>' +
                '</div>' +
                '</div>';

    }

    /*Se setea en FormContainer para que puedan ser validados automaticamente*/
    $("#FormContainer").html(estructura);

}


function saveScreen2() {
    /*Se validan que todos los datos hayan sido diligenciados*/
    if (validateForm()) {

        /*Se captura el total de activos*/
        var totalActivos = $("#txtTotalActivos").val();

        /*Se define un array por cada conjunto de datos para almacenarlos*/
        var activosSucursales = new Array();
        var departamentoSucursales = new Array();
        var municipioSucursales = new Array();

        /*Se recorre cada grupo de sucursales para ir almacenado valor por valor
         * en los arrays definidos*/
        for (var x = 1; x <= totalSucursales; x++) {
            activosSucursales.push($("#txtActivosSucursal" + x).val());
            departamentoSucursales.push($("#selDepartamento" + x).val());
            municipioSucursales.push($("#selMunicipio" + x).val());
        }

        /*Se define un objeto con el total de activos y los 3 arrays*/
        var obj = {
            totalActivos: totalActivos,
            activosSucursales: activosSucursales,
            departamentoSucursales: departamentoSucursales,
            municipioSucursales: municipioSucursales
        };

        /*Se parsea a JSON y se almacena en una nueva variable de sesion*/
        localStorage['objRenovacionRegistroMercantilScreen2'] = JSON.stringify(obj); // only strings

        /*Se redirecciona a la Screen 3*/
        location.href = "?Page=Screen3";
    }

}
