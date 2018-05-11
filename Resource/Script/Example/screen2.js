
$(document).ready(function () {

    var x = JSON.parse(localStorage['objRenovacionRegistroMercantil']);
    
    alert(x.nit);


});





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
