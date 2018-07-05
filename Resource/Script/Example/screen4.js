$(document).ready(function () {
    sendDataApp();
});




function sendDataApp() {

    var arrayParameters = new Array();

    var parte0 = localStorage['objRenovacionRegistroMercantilSecurity'];
    var parte1 = localStorage['objRenovacionRegistroMercantilScreen1'];
    var parte2 = localStorage['objRenovacionRegistroMercantilScreen2'];
    var parte3 = localStorage['objRenovacionRegistroMercantilScreen3'];

    arrayParameters.push(newArg("parte0", parte0));
    arrayParameters.push(newArg("parte1", parte1));
    arrayParameters.push(newArg("parte2", parte2));
    arrayParameters.push(newArg("parte3", parte3));

    Execute(arrayToObject(arrayParameters), 'Example/CtlCalculo', '', 'queHacerConElResultado(info);');
}


function queHacerConElResultado(info) {

    console.log(info);


    var estructuraPagoSucursales = $("#FormContainer").html();
    var contSuc = 1;

    var arrayPagoSucursales = ((((info.arrayPagoSucursales).replace("[", "")).replace("]", "")).replace(/"/g, "")).split(",");

    arrayPagoSucursales.forEach(function (data) {
        estructuraPagoSucursales = estructuraPagoSucursales +
                "<div class='row'><div class='col-md-6'><div class='form-group'><label><span>Sucursal " + contSuc + "</span></label></div></div><div class='col-md-6'><div class='form-group'><input id='txtSucursal" + contSuc + "' disabled name='Sucursal" + contSuc + "' class='form-control' type='text' value='" + data + "' autocomplete='off' required></div></div></div>"
        contSuc++;
    });

    estructuraPagoSucursales = estructuraPagoSucursales + "<div class='row'>\n\
                                                               <div class='col-md-12'>\n\
                                                                  <input type='button' class='btn btn-primary btn-block \n\
                                                                  btn-flat verdeExaudi' id='btnImprimir' value='Imprimir' onclick='imprimir();'>\n\
                                                               </div>\n\
                                                           </div>";


    $("#FormContainer").html(estructuraPagoSucursales);


    $("#txtPagoTotal").val(info.pagoTotal);
    $("#txtPagoPrincipal").val(info.pagoPrincipal);
    $("#txtPagoFormularios").val(info.pagoFormularios);
    $("#txtPagoCertificadosMatricula").val(info.pagoCertificadosMatricula);
    $("#txtPagoCertificadosExistencia").val(info.pagoCertificadosExistencia);
    $("#txtPagoCertificadoEspecial").val(info.pagoCertificadosEspecial);
}


function imprimir() {
    
    $("#txtParte0").val(localStorage['objRenovacionRegistroMercantilSecurity']);
    $("#txtParte1").val(localStorage['objRenovacionRegistroMercantilScreen1']);
    $("#txtParte2").val(localStorage['objRenovacionRegistroMercantilScreen2']);
    $("#txtParte3").val(localStorage['objRenovacionRegistroMercantilScreen3']);

    document.getElementById('frmPDF').submit();
}
