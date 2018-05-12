function logInGmail() {
    /*Se simula click sobre el boton de google*/
    $(".abcRioButton").click();
}



/*Se recibe por parametro los datos del usuario indentificado*/
function onSignIn(googleUser) {
    /*Se define una variable con dichos datos*/
    var profile = googleUser.getBasicProfile();

    var imageRoute = profile.getImageUrl();
    var email = profile.getEmail();
    var nombre = profile.getName();

    /*Se crea un objeto con la info recuperada*/
    var obj = {
        imageRoute: imageRoute,
        email: email,
        nombre: nombre
    };


    /*En cache se crea una variable llamada objRenovacionRegistroMercantilScreen1, 
     * la cual almacena el objeto en formato JSON, ya que la cache solo almacena 
     * datos primitivos*/
    localStorage['objRenovacionRegistroMercantilSecurity'] = JSON.stringify(obj); // only strings

    /*Se refresta indicando que se debe cargar la Screen2*/
    location.href = "?Page=Screen1";
}