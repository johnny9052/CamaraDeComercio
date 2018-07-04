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
        <script src="Resource/Script/Example/screen4.js" type="text/javascript"></script>

    </head>
    <body class="hold-transition login-page">


        <div class="login-box">
          
            <div class="login-box-body">


                <form  id="FormContainer">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>
                                    <span>Pago total</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <input id="txtPagoTotal" 
                                       disabled 
                                       name="Pago total" 
                                       class="form-control" 
                                       type="text" 
                                       value="" 
                                       autocomplete="off" 
                                       required>
                            </div>
                        </div>                     
                    </div>



                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>
                                    <span>Pago principal</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <input id="txtPagoPrincipal" 
                                       disabled 
                                       name="Pago principal" 
                                       class="form-control" 
                                       type="text" 
                                       value="" 
                                       autocomplete="off" 
                                       required>
                            </div>
                        </div>  
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>
                                    <span>Pago formularios</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <input id="txtPagoFormularios" 
                                       disabled 
                                       name="Pago formularios" 
                                       class="form-control" 
                                       type="text" 
                                       value="" 
                                       autocomplete="off" 
                                       required>
                            </div>
                        </div>  
                    </div>



                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>
                                    <span>Pago certificados matricula</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <input id="txtPagoCertificadosMatricula" 
                                       disabled 
                                       name="Pago certificados matricula" 
                                       class="form-control" 
                                       type="text" 
                                       value="" 
                                       autocomplete="off" 
                                       required>
                            </div>
                        </div>  
                    </div>



                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>
                                    <span>Pago certificados existencia</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <input id="txtPagoCertificadosExistencia" 
                                       disabled 
                                       name="Pago certificados existencia" 
                                       class="form-control" 
                                       type="text" 
                                       value="" 
                                       autocomplete="off" 
                                       required>
                            </div>
                        </div>  
                    </div>
                    
                    
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>
                                    <span>Pago certificado especial</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <input id="txtPagoCertificadoEspecial" 
                                       disabled 
                                       name="Pago certificado especial" 
                                       class="form-control" 
                                       type="text" 
                                       value="" 
                                       autocomplete="off" 
                                       required>
                            </div>
                        </div>  
                    </div>
           
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
