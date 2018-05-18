<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Identificación usuarios</title>

        <!-- iCheck -->
        <link rel="stylesheet" href="Resource/plugins/iCheck/square/blue.css">


        <script type="text/javascript" src="Resource/Script/Security/LogIn.js"></script>

        <script src="Resource/Script/Example/screen3.js" type="text/javascript"></script>
    </head>
    <body class="hold-transition login-page">


        <div class="login-box">
            <div class="login-logo">
                <label>Proyecto Cámara de comercio</label>
            </div>

            <div class="login-box-body">
                <p class="login-box-msg">¿Desea certificados de?</p>

                <form  id="FormContainer">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input id="chkMatriculaMercantil" name="matriculaMercantil" 
                                       type="checkbox" value="txtMatriculaMercantil" 
                                       onclick="enabledDisabled('txtMatriculaMercantil');" />
                                <label>
                                    <span>Matrícula Mercantil</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <input id="txtMatriculaMercantil" disabled name="firstName" class="form-control" type="text" value="" autocomplete="off" required
                                       placeholder="¿Cuántos?">
                            </div>
                        </div>  

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input id="chkExistencia" name="existencia" 
                                       type="checkbox" class="certificadoExistencia" 
                                       value="txtExistencia" onchange="enabledDisabled('txtCertificadoEspecial');"/>
                                <label>                                   
                                    <span>Existencia</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input id="txtExistencia" disabled name="firstName" class="form-control" type="text" value="" autocomplete="off" required
                                       placeholder="¿Cuántos?">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group" class="checkboxValidation">
                                <input id="chkCertificadoEspecial"  name="certificadoEspecial" 
                                       type="checkbox" class="certificadoEspecial" 
                                       value="txtCertificadoEspecial"/>
                                <label>                                  
                                    <span>Especial</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input id="txtCertificadoEspecial" disabled name="firstName" class="form-control" type="text" value="" autocomplete="off" required
                                       placeholder="¿Cuántos?">
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">                            
                            <input type="button" class="btn btn-primary btn-block btn-flat verdeExaudi" id="btnLoguin" value="Aceptar" onclick="saveScreen3();">
                        </div>     
                    </div>

                </form>
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
