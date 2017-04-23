
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilosFooter.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
      var visible = false;
      window.onload = function() {
        var boton = document.getElementById("verPassword");
        var campoPassword = document.getElementById("campoPassword");
        boton.onclick = function(){
          if (visible) {
            campoPassword.setAttribute("type","password");
            visible = false;
          } else {
            campoPassword.setAttribute("type","text");
            visible = true;
          }
        }
      }
    </script>
  </head>
  <body>
    <div class="container">
      <div class="row img-responsive">
        <div class="col-xs-4">
          <img src="img/logo_umar.jpg" class="img-responsive">
        </div>
        <div class="col-xs-8">
          <img src="img/logo_umar_2.jpg" class="img-responsive">
        </div>
      </div>

      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
		  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="#" data-toggle="modal" data-target="#login-modal">Login <span class="glyphicon glyphicon-user"></span></a></li>
              <li><a href="registro.php">Personal</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <div class="row">
        <div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <center>Personal</center>
            </div>
              <div class="panel-body">
                <form action="php/guardarDatos.php" method="post" name="frm" class="form-horizontal">
				   <!--                   <div class="form-group">
                   
<label for="" style="text-align:left" class="col-sm-4 control-label" >Id Personal:</label>
                    <div class="col-sm-8">
                      <input type="number" min="1" class="form-control" name="numeroId" data-toggle="tooltip" data-placement="right" title="Ingrese el su id" placeholder="" required maxlength="10" onKeyPress="return validarNumeroEmpleado(event)">
                    </div>
                  </div>-->
				  
				  <div class="form-group">
                    <label for="" style="text-align:left" class="col-sm-4 control-label">Usuario:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="usuario" name="usuario" data-toggle="tooltip" data-placement="right" required maxlength="40">
                    </div>
                  </div>
				  
				  
				     <div class="form-group">
                    <label for="" style="text-align:left" class="col-sm-4 control-label">Password:</label>
                    <div class="col-sm-6">
                      <input type="password" class="form-control" name="pass" data-toggle="tooltip" data-placement="right" title="Logitud m�xima 20 caracteres" required maxlength="20" onKeyPress="return validarContrasena(event)" onpaste="return false" oncut="return false" oncopy="return false" id="campoPassword">
                    </div>
                    <div class="col-sm-2">
                      <button  type="button"class="btn btn-default glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="right" title="Ver contrase�a" id="verPassword"></button>
                    </div>
                  </div>
				  

                  <div class="form-group">
                    <label for="" style="text-align:left" class="col-sm-4 control-label">Nombre:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="nombre" data-toggle="tooltip" data-placement="right" title="Ingrese su nombre(S)" placeholder="" required maxlength="30" onKeyPress="return validarNombre(event)" onKeyUp="convertirMayusculaNombre(event)" onpaste="return false" oncut="return false" oncopy="return false">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" style="text-align:left" class="col-sm-4 control-label">Apellidos:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="apellidos" data-toggle="tooltip" data-placement="right" title="Ingrese sus apellidos" placeholder="" required maxlength="30" onKeyPress="return validarApellidos(event)" onKeyUp="convertirMayusculaApellidos(event)" onpaste="return false" oncut="return false" oncopy="return false">
                    </div>
                  </div>
				  
				  
				   <div class="form-group">
                    <label for="" style="text-align:left" class="col-sm-4 control-label">Campus:</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="campus" id="Cargo">

                      </select>
                    </div>
                  </div>
	
	
				 <div class="form-group">
                    <label for="" style="text-align:left" class="col-sm-4 control-label">Cargo:</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="Cargo" id="Cargo">

                      </select>
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="" style="text-align:left" class="col-sm-4 control-label">Grado de estudios:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="apellidos" data-toggle="tooltip" data-placement="right" title="Ingrese sus apellidos" placeholder="" required maxlength="30" onKeyPress="return validarApellidos(event)" onKeyUp="convertirMayusculaApellidos(event)" onpaste="return false" oncut="return false" oncopy="return false">
                    </div>
                  </div>
				  
				   <div class="form-group">
                    <label for="" style="text-align:left" class="col-sm-4 control-label">Area:</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="Cargo" id="Cargo">

                      </select>
                    </div>
                  </div>
				  
				  
				 <div class="form-group">
                   <label for="" style="text-align:left" class="col-sm-4 control-label">Correo:</label>
                    <div class="col-sm-8">
                      <input type="email" class="form-control" name="correo" data-toggle="tooltip" data-placement="right" title="Ingrese su correo" placeholder="" required maxlength="50" onpaste="return false" oncut="return false" oncopy="return false" onKeyPress="return validarCorreo(event)">
                   </div>
                 </div>

                 <div class="form-group">
                    <label for="" style="text-align:left" class="col-sm-4 control-label">Extension:</label>
                    <div class="col-sm-8">
                      <input type="tel" class="form-control" name="extension" maxlength="10" pattern="[0-9]*" data-toggle="tooltip" data-placement="right" title="10 digitos" placeholder="" required onkeyPress="return validarSoloNumeros(event);" onpaste="return false" oncut="return false" oncopy="return false">
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="" style="text-align:left" class="col-sm-4 control-label">Sexo:</label>
                    <div class="col-sm-offset-2 col-sm-6">
                      <label class="radio-inline">
                        <input type="radio" name="sexo" value="Masculino" checked> Hombre
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="sexo" value="Femenino"> Mujer
                      </label>
                    </div>
                  </div>
               

               


                  <div class="form-group">
                    <div class="col-sm-offset-4 col-xs-12 col-sm-8">
                      <button type="reset" class="btn btn-primary">
                        <span class="glyphicon glyphicon-remove"></span>
                        Limpiar</button>
                      <button type="submit" class="btn btn-success">
                        <span class="glyphicon glyphicon-ok"></span>
                        Guardar
                      </button>
                    </div>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/convertidor.js"></script>
    <script src="js/combosPreregistro.js"></script>
    <script src="js/footer.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
