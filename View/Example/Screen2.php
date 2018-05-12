<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Identificacion usuarios</title>

        <!-- iCheck -->
        <link rel="stylesheet" href="Resource/plugins/iCheck/square/blue.css">


        <script type="text/javascript" src="Resource/Script/Security/LogIn.js"></script>

        <script src="Resource/Script/Example/screen2.js" type="text/javascript"></script>
    </head>
    <body class="hold-transition login-page">


        <div class="login-box">
            <div class="login-logo">
                <label>Proyecto Camara de comercio</label>
            </div>

            <div class="login-box-body">
                <p class="login-box-msg">Sucursales</p>

                <form  id="FormContainer">

                </form>


                <div class="row">                        

                    <div class="col-md-12">
                        <input type="button" class="btn btn-primary btn-block btn-flat verdeExaudi" id="btnLoguin" value="Aceptar" onclick="saveScreen2();">
                    </div>

                    <div class="col-md-12">
                        <div class="progress progress-sm active">
                            <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="100" aria-valuemax="100" style="width: 100%">
                                <span class="sr-only">100% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>








        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>
