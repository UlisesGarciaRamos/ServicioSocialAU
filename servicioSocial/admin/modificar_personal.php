<?php
/*  require "../php/BaseDatos.php";
  require 'menu.php';*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Modificar Personal</title>
   
    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilosFooter.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="">

    <div class="container">

      <div class="row img-responsive">
        <div class="col-xs-4">
          <img src="../img/logo_umar.jpg" class="img-responsive">
        </div>
        <div class="col-xs-8">
          <img src="../img/logo_umar_2.jpg" class="img-responsive">
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
      
      <?php
        /*$query = "SELECT * FROM preregistro";
        $bd = new BaseDatos();
        $bd->realizarConexion();
        $resultado = $bd->realizarConsulta($query);
        $numResultados = $resultado->num_rows;
        $query = "SELECT * FROM usuario";
        $resultado = $bd->realizarConsulta($query);
        $numRegistros = $resultado->num_rows;
        $bd->cerrarConexion();
        verMenu(" ", $numResultados, $numRegistros);*/
      ?>

      <div class="row">
        <div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <center>Modificar Personal</center>
            </div>
            <div class="panel-body">
              <form action="php/guardarDatos.php" method="post" name="frm" class="form-horizontal">
			  
			   <div class="form-group">
                    <label for="" style="text-align:left" class="col-sm-4 control-label">Tipo de busqueda:</label>
                    <div class="col-sm-offset-2 col-sm-6">
                      <label class="radio-inline">
                        <input type="radio" name="id" value="Masculino" checked> Id de personal
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="nombre" value="Femenino"> Nombre
                      </label>
                    </div>
                  </div>
			  
			  
                <div class="form-group">
                  <button type="submit" class="btn btn-primary" id="btnBuscarPersonal" form="">Iniciar busqueda</button>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="cuadro" name="cuadro" data-toggle="tooltip" data-placement="right" required maxlength="40">
                  </div>
                </div>
                <label>Seleccione el usuario a modificar:</label><p>
                <div class="form-group">
                  <div class="table-responsive col-sm-12">
                    <table class="table table-hover" id="tablaInformacionCarrera">

                    </table>
                  </div>
                </div>

                <div class="form-group">
                  <center>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalModificarCarrera" data-whatever="@mdo" id="btnModificar">
                      <span class="glyphicon glyphicon-pencil"></span>
                      Modificar
                    </button>
                  </center>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modalModificarCarrera" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Modificar Carrera</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <form id = "formModalModificarCarrera">
                  <div class="form-group">
                    <label for="" style="text-align:left" class="col-sm-4 control-label">Número de la Carrera:</label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" name="num_carrera" placeholder="" required readonly="true" id="num_carrera">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" style="text-align:left" class="col-sm-4 control-label">Nombre de la Carrera:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="name_carrera" placeholder="" required id="name_carrera">
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary" id="btnModalModificarCarrera" form="formModalModificarCarrera">Guardar Cambios</button>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/tareasAdmin.js"></script>
    <script src="../js/footer.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
