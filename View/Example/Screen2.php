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
                    <div class="form-group has-feedback">
                        <input type="text" id="txtUser" name="user" class="form-control" placeholder="Total activos" required onkeypress="return activarViaEnter(event);">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>

                    <div class="box box-primary">
                        <div class="form-group has-feedback">                        
                            <input type="text" id="txtUser" name="user" class="form-control" placeholder="Activos sucursal 1" required onkeypress="return activarViaEnter(event);">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>                                                
                        </div>
                        <div class="form-group">                            
                            <select id="selRol" name="rol" required class="form-control select2" style="width: 100%;">
                                <option value="-1" selected> -- SELECCIONE DEPARTAMENTO --</option>                            
                                <option value="-1" >CALDAS</option> 
                                <option value="-1" >RISARALDA</option> 
                                <option value="-1" >QUINDIO</option> 
                            </select>
                        </div>
                        <div class="form-group">                            
                            <select id="selRol" name="rol" required class="form-control select2" style="width: 100%;">
                                <option value="-1" > -- SELECCIONE MUNICIPIO --</option>                            
                                <option value="-1" >ARMENIA</option>                            
                                <option value="-1" >DOSQUEBRADAS</option>                            
                                <option value="-1" >MANIZALES</option>                            
                                <option value="-1" >PEREIRA</option>                                                                                            
                            </select>
                        </div>
                    </div>


                    <div class="box box-primary">
                        <div class="form-group has-feedback">                        
                            <input type="text" id="txtUser" name="user" class="form-control" placeholder="Activos sucursal 2" required onkeypress="return activarViaEnter(event);">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>                                                
                        </div>
                        <div class="form-group">                            
                            <select id="selRol" name="rol" required class="form-control select2" style="width: 100%;">
                                <option value="-1" selected> -- SELECCIONE DEPARTAMENTO --</option>                            
                                <option value="-1" >CALDAS</option> 
                                <option value="-1" >RISARALDA</option> 
                                <option value="-1" >QUINDIO</option> 
                            </select>
                        </div>
                        <div class="form-group">                            
                            <select id="selRol" name="rol" required class="form-control select2" style="width: 100%;">
                                <option value="-1" selected> -- SELECCIONE MUNICIPIO --</option>   
                                <option value="-1" >ARMENIA</option>                            
                                <option value="-1" >DOSQUEBRADAS</option>                            
                                <option value="-1" >MANIZALES</option>                            
                                <option value="-1" >PEREIRA</option>                                                                                            
                            </select>
                        </div>
                    </div>


                    <div class="box box-primary">
                        <div class="form-group has-feedback">                        
                            <input type="text" id="txtUser" name="user" class="form-control" placeholder="Activos sucursal 3" required onkeypress="return activarViaEnter(event);">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>                                                
                        </div>
                        <div class="form-group">                            
                            <select id="selRol" name="rol" required class="form-control select2" style="width: 100%;">
                                <option value="-1" selected> -- SELECCIONE DEPARTAMENTO --</option>  
                                <option value="-1" >CALDAS</option> 
                                <option value="-1" >RISARALDA</option> 
                                <option value="-1" >QUINDIO</option> 

                            </select>
                        </div>
                        <div class="form-group">                            
                            <select id="selRol" name="rol" required class="form-control select2" style="width: 100%;">
                                <option value="-1" selected> -- SELECCIONE MUNICIPIO --</option>    
                                <option value="-1" >ARMENIA</option>                            
                                <option value="-1" >DOSQUEBRADAS</option>                            
                                <option value="-1" >MANIZALES</option>                            
                                <option value="-1" >PEREIRA</option>                                                                                           
                            </select>
                        </div>
                    </div>


                    <div class="box box-primary">
                        <div class="form-group has-feedback">                        
                            <input type="text" id="txtUser" name="user" class="form-control" placeholder="Activos sucursal 4" required onkeypress="return activarViaEnter(event);">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>                                                
                        </div>
                        <div class="form-group">                            
                            <select id="selRol" name="rol" required class="form-control select2" style="width: 100%;">
                                <option value="-1" selected> -- SELECCIONE DEPARTAMENTO --</option>     
                                <option value="-1" >CALDAS</option> 
                                <option value="-1" >RISARALDA</option> 
                                <option value="-1" >QUINDIO</option> 
                            </select>
                        </div>
                        <div class="form-group">                            
                            <select id="selRol" name="rol" required class="form-control select2" style="width: 100%;">
                                <option value="-1" selected> -- SELECCIONE MUNICIPIO --</option>  
                                <option value="-1" >ARMENIA</option>                            
                                <option value="-1" >DOSQUEBRADAS</option>                            
                                <option value="-1" >MANIZALES</option>                            
                                <option value="-1" >PEREIRA</option>                                                                                            
                            </select>
                        </div>
                    </div>





                    <div class="row">                        

                        <div class="col-md-12">
                            <a type="button" class="btn btn-primary btn-block btn-flat verdeExaudi" id="btnLoguin" href="?Page=Screen3">Aceptar</a>
                        </div>

                        <div class="col-md-12">
                            <div class="progress progress-sm active">
                                <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="100" aria-valuemax="100" style="width: 100%">
                                    <span class="sr-only">100% Complete</span>
                                </div>
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
