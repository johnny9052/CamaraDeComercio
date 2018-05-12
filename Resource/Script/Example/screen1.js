

function saveScreen1() {

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

    localStorage['objRenovacionRegistroMercantilScreen1'] = JSON.stringify(obj); // only strings

    location.href = "?Page=Screen2";

  
}
