<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Bootstrap 101 Template</title>    
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">    
  </head>

  <body class="">
    <div class="container">
      <div class="row img-responsive">
        <div class="col-xs-4">
          <img src="img/logo_umar.jpg" class="img-responsive">
        </div>
        <div class="col-xs-8">
          <img src="img/logo_umar_2.jpg" class="img-responsive">
        </div>
      </div>      
      <div class="row">
        <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <center>Login</center>
            </div>
              <div class="panel-body">                              

                <form action="php\validarUsuario.php" method="post">
                  
                   <div class="form-group" id="contenedorRol">
                    <label for="" style="text-align:left" class="col-sm-4 control-label">Rol:</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="roles" id="roles">
                        <option>Administrador</option>
                        <option>Personal</option>                        
                      </select>
                    </div>
                  </div>
              
                  <div class="form-group">                    
                    <label for="inputEmail3" style="text-align:left" class="col-sm-4 control-label">Usuario:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="nombreUsuario" placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group">                    
                    <label for="inputPassword3" style="text-align:left" class="col-sm-4 control-label">Contraseña:</label>
                    <div class="col-sm-8">
                      <input type="password" class="form-control" name="passwordUsuario" placeholder="" required>
                    </div>
                  </div>                                  
                  <div class="form-group">
                    <div class="col-xs-offset-1 col-md-offset-4 col-xs-10">
                      <button type="reset" class="btn btn-success" name="botonLimpiar">Limpiar</button>
                      <button type="submit" class="btn btn-success" name="botonEntrar">Entrar</button>                      
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <a id="recuperarPassword" href="#">¿Olvidaste la Contraseña?</a>
                    </div>
                  </div>                 
                </form>

              </div>
          </div>
        </div>
      </div>
    </div> <!--Fin del contenedor-->

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/login.js"></script>    
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>