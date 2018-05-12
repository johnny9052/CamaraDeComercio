

$(document).ready(function () {
    var obj = JSON.parse(localStorage['objRenovacionRegistroMercantilScreen1']);
    var totalSucursales = parseInt(obj.sucursales);
    buildSucursales(totalSucursales);
});


function buildSucursales(totalSucursales) {
    
    

    var estructura = '<div class="form-group has-feedback">' +
            '<input type="text" id="txtTotalActivos" placeholder="Total activos" required class="form-control">' +
            '<span class="glyphicon glyphicon-user form-control-feedback"></span>' +
            '</div>';


    for (var x = 1; x <= totalSucursales; x++) {        
        estructura = estructura +
                '<div class="box box-primary">' +
                '<div class="form-group has-feedback">' +
                '<input type="text" id="txtActivosSucursal' +x+'" class="form-control" placeholder="Activos sucursal ' + x + '">' +
                '<span class="glyphicon glyphicon-user form-control-feedback"></span>' +
                '</div>' +
                '<div class="form-group">' +
                '<select id="selDepartamento' +x+'" required class="form-control" style="width: 100%;">' +
                '<option value="-1" selected> -- SELECCIONE DEPARTAMENTO --</option>' +
                '<option value="1" >CALDAS</option>' +
                '<option value="1" >RISARALDA</option>' +
                '<option value="1" >QUINDIO</option>' +
                '</select>' +
                '</div>' +
                '<div class="form-group">' +
                '<select id="selMunicipio' +x+'"  required class="form-control" style="width: 100%;">' +
                '<option value="-1" > -- SELECCIONE MUNICIPIO --</option>' +
                '<option value="1" >ARMENIA</option>' +
                '<option value="1" >DOSQUEBRADAS</option>' +
                '<option value="1" >MANIZALES</option>' +
                '<option value="1" >PEREIRA</option>' +
                '</select>' +
                '</div>' +
                '</div>';

    }
    
    $("#FormContainer").html(estructura);

}


function saveScreen2() {

    var nit = $("#txtNit").val();
    var nombreRepresentante = $("#txtNombreRepresentante").val();
    var departamento = $("#selDepartamento").val();
    var municipio = $("#selMunicipio").val();
    var sucursales = $("#txtSucursales").val();

    var obj = {
        nit: nit,
        nombreRepresentante: nombreRepresentante,
        departamento: departamento,
        municipio: municipio,
        sucursales: sucursales
    };

    localStorage['objRenovacionRegistroMercantil'] = obj; // only strings

    location.href = "?Page=Screen2";


}
