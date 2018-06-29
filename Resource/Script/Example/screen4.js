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
    
    $("#lblResultado").html(info.nombre);
}
