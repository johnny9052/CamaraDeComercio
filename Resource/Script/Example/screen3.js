$(document).ready(function () {
    var obj = JSON.parse(localStorage['objRenovacionRegistroMercantilScreen2']);

    $('#chkMatriculaMercantil').on('ifChanged', function (event) {
        enabledDisabled('txtMatriculaMercantil');
    });
    
    $('#chkExistencia').on('ifChanged', function (event) {
        enabledDisabled('txtExistencia');
    });
        
    $('#chkCertificadoEspecial').on('ifChanged', function (event) {
        enabledDisabled('txtCertificadoEspecial');
    });
    
});

function saveScreen3() {

    var opciones = new Array();

    var form = defualtForm('');

    var campos = '#' + form + ' :input';
    $(campos).each(function () {
        var elemento = this;

        if (elemento.type === "checkbox") {
            opciones.push(elemento.name);
            opciones.push(($("#" + elemento.value).val() === "") ? 0 : $("#" + elemento.value).val());
        }

    });

    var obj = {
        certificados: opciones
    };

    /*Se parsea a JSON y se almacena en una nueva variable de sesion*/
    localStorage['objRenovacionRegistroMercantilScreen3'] = JSON.stringify(obj); // only strings

    location.href = "?Page=Screen4";

}



function enabledDisabled(idElement) {    
    if ($('#' + idElement).prop("disabled")) {
        $('#' + idElement).prop('disabled', false);
    } else {
        $('#' + idElement).prop('disabled', true);
    }
}



