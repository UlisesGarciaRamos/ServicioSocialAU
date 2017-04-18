<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Inicio</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilosFooter.css">
	    <link rel="stylesheet" href="css/login.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style media="screen">
      .imgCarrucel {
        width: 100%;
      }
    </style>
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
            <a class="navbar-brand" href=""><span class="glyphicon glyphicon-home"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
		  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="#" data-toggle="modal" data-target="#login-modal">Login <span class="glyphicon glyphicon-user"></span></a></li>
              <li><a href="pre_registro.php">Pre-Registro</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
        

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<!--borrar abajo-->
				<div class="row">
        <div class="col-sm-12 col-md-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <center>Login</center>
            </div>
				<div class="panel-body">  
				<form action="" method="post">
                  
                   <div class="form-group" id="contenedorRol">
                    <label for="" style="text-align:left">Rol:</label>
                    <div>
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
		  </div>
</div>

      </nav>
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              <li data-target="#carousel-example-generic" data-slide-to="3"></li>
              <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="img/1.jpg" alt="" class="imgCarrucel">
                <div class="carousel-caption">
                  <h3>Universidad del Mar</h3>
                  <p>Campus Puerto Escondido</p>
                </div>
              </div>
              <div class="item">
                <img src="img/2.jpg" alt="" class="imgCarrucel">
                <div class="carousel-caption">
                  <h3>Universidad del Mar</h3>
                  <p>Campus Puerto Escondido</p>
                </div>
              </div>
              <div class="item">
                <img src="img/3.JPG" alt="" class="imgCarrucel">
                <div class="carousel-caption">
                  <h3>Universidad del Mar</h3>
                  <p>Campus Puerto Escondido</p>
                </div>
              </div>
              <div class="item">
                <img src="img/4.JPG" alt="" class="imgCarrucel">
                <div class="carousel-caption">
                  <h3>Universidad del Mar</h3>
                  <p>Campus Puerto Escondido</p>
                </div>
              </div>
              <div class="item">
                <img src="img/5.JPG" alt="" class="imgCarrucel">
                <div class="carousel-caption">
                  <h3>Universidad del Mar</h3>
                  <p>Campus Puerto Escondido</p>
                </div>
              </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/login.js"></script>
    <script src="js/footer.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
