window.onload = function() {
  var numeroDeIntentos = 0;
  var botonEntrar = document.getElementsByName("botonEntrar");
  var botonLimpiar = document.getElementsByName("botonLimpiar");
  var nombreUsuario = document.getElementsByName("nombreUsuario");
  var passwordUsuario = document.getElementsByName("passwordUsuario");
  var etiquetaRecuperarPassword = document.getElementById("recuperarPassword");
  
  etiquetaRecuperarPassword.onclick = function(e) {
    e.preventDefault();
    if (!validarUsuario(nombreUsuario[0])) {
      return;
    }
    window.location = "php/recuperarPassword.php?usuario="+nombreUsuario[0].value;
  }
  
  botonEntrar[0].onclick = function(e) {
    e.preventDefault();
    //nunca va entrar
    if (validarCampos(nombreUsuario[0], passwordUsuario[0]) == false) {
      return;
    }

    numeroDeIntentos++;
    alert("el numeroDeIntentos = "+numeroDeIntentos);
    ejecutarAjax(0);    
    if (numeroDeIntentos >= 3) {  
      ejecutarAjax(1);
    }
  }
  
  function ejecutarAjax(estado) {   
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var resultado = parseInt(this.responseText);
        if (resultado > 1) {
          bloquearUsuario();          
        } else if (resultado > 0) {
          window.location = "sistema.php";
        } else if (resultado >= 0){
          if (numeroDeIntentos < 3) {
             alert("La información proporcionada no es correcta");
          }                  
        }
      }
    }
    xmlhttp.open("GET", "php/entrarSistema.php?usuario="+nombreUsuario[0].value+"&password="+passwordUsuario[0].value+"&estado="+estado, true);
    xmlhttp.send();
//    window.location = "php/entrarSistema.php?usuario="+usuario[0].value+"&password="+password[0].value+"&estado="+estado;
  }
  
  
  function validarCampos(campoUsuario, campoPassword) {
    var bandera = true;

    if (campoUsuario.value == "") {
      alert("El campo Usuario está vacío.\nPara iniciar el sistema requiere de ésta información.");
      bandera = false;
      return bandera;
    }
    if (campoPassword.value == "") {
      alert("El campo Contraseña está vacío.\nPara iniciar el sistema requiere de ésta información.");
      bandera = false;
      return bandera;
    }
    return bandera;
  }
  
  function validarUsuario(campoUsuario) {
    if (campoUsuario.value == "") {
      alert("El campo Usuario está vacío.\nPara recuperar su contraseña el sistema requiere de ésta información.");
      return false;
    }
    return true;
  }
}