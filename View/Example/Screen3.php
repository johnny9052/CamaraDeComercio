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
    </head>
    <body class="hold-transition login-page">


        <div class="login-box">
            <div class="login-logo">
                <label>Proyecto Camara de comercio</label>
            </div>

            <div class="login-box-body">
                <p class="login-box-msg">Desea certificados actualizados</p>

                <form  id="FormContainer">


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <input id="txtFirstName" name="firstName" class="form-control" type="text" value="" autocomplete="off" required
                                       placeholder="¿Cuantos?">
                            </div>
                        </div>                       

                        <div class="col-md-6">
                            <a type="button" class="btn btn-primary btn-block btn-flat verdeExaudi" id="btnLoguin" href="?Page=Screen4">Si</a>
                        </div>     
                    </div>


                    <div class="row">
                        <div class="col-md-6">

                        </div>                       

                        <div class="col-md-6">
                            <a type="button" class="btn btn-primary btn-block btn-flat verdeExaudi" id="btnLoguin" href="?Page=Screen4">No</a>
                        </div>     
                    </div>


                    <br>

                   
                </form>


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
