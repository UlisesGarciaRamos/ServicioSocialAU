$(document).ready(function(){
  var accion = "";
  if ($("#divIdentificador").text() == "ModificarGrupo") {
    accion = "mostrarTablaModificar";
  } else if ($("#divIdentificador").text() == "EliminarGrupo") {
    accion = "mostrarTablaEliminar";
  } else if ($("#divIdentificador").text() == "MostrarGrupo") {
    accion = "mostrarTablaGrupos";
  }


  $("#formAltaGrupo").submit(function(e) {
    e.preventDefault();
    var datosJson = {accion : "guardar", nombre : $("#name_grupo").val(), semestre : $("#selectSemestre").val(), campus : $("#selectCampus").val(), carrera : $("#selectCarrera").val(), numeroAlumnos : $("#num_alumnos").val()};
    var mensajePositivo = "La información se guardó correctamente.";
    var mensajeNegativo = "La información no se pudo guardar.";
    realizarAccion(datosJson, mensajePositivo, mensajeNegativo, false);
  });



function realizarAccion(datosJson, mensajePositivo, mensajeNegativo, recargarPagina) {
  $.ajax({
    method: "POST",
    url: "../php/tareasJefeCarrera.php",
    data: datosJson
  })
  .done(function( msg ) {
    if (msg == "true") {
      alert(mensajePositivo);
      if (recargarPagina) {
        location.reload();
      } else {
        $("#btnReset").click();
      }
    } else {
      alert(mensajeNegativo);
    }
  })
}$(document).ready(function(){
  var accion = "";
  if ($("#divIdentificador").text() == "ModificarGrupo") {
    accion = "mostrarTablaModificar";
  } else if ($("#divIdentificador").text() == "EliminarGrupo") {
    accion = "mostrarTablaEliminar";
  } else if ($("#divIdentificador").text() == "MostrarGrupo") {
    accion = "mostrarTablaGrupos";
  }

  $("#selectCampus").load("../php/combosPreregistros.php?combo=campus", function() {
    $("#selectCarrera").load("../php/combosPreregistros.php?combo=carrera&campus=" + escape("Puerto Escondido"), function() {
      $("#tablaGrupos").load("../php/tareasJefeCarrera.php", {accion: accion, campus : $("#selectCampus").val(), carrera : $("#selectCarrera").val()});
    });
  });

  $("#selectCampus").change(function() {
    $("#selectCarrera").load("../php/combosPreregistros.php?combo=carrera&campus=" + escape($(this).val()), function() {
      $("#tablaGrupos").load("../php/tareasJefeCarrera.php", {accion: accion, campus : $("#selectCampus").val(), carrera : $("#selectCarrera").val()});
    });
  });

  $("#selectCarrera").change(function() {
    $("#tablaGrupos").load("../php/tareasJefeCarrera.php", {accion: accion, campus : $("#selectCampus").val(), carrera : $("#selectCarrera").val()});
  });

  $("#selectSemestre").load("../php/tareasAdmin.php",{accion: "mostrarNombre",tabla: "semestre"})

  $("#formAltaGrupo").submit(function(e) {
    e.preventDefault();
    var datosJson = {accion : "guardar", nombre : $("#name_grupo").val(), semestre : $("#selectSemestre").val(), campus : $("#selectCampus").val(), carrera : $("#selectCarrera").val(), numeroAlumnos : $("#num_alumnos").val()};
    var mensajePositivo = "La información se guardó correctamente.";
    var mensajeNegativo = "La información no se pudo guardar.";
    realizarAccion(datosJson, mensajePositivo, mensajeNegativo, false);
  });

  $("#formModalModificarGrupo").submit(function(e) {
    e.preventDefault();
    $('#modalModificarGrupo').modal('hide');
    var datosJson = {accion : "modificar", nombre : $("#name_grupo").val(), semestre : $("#selectSemestre").val(), campus : $("#modalSelectCampus").val(), carrera : $("#modalSelectCarrera").val(), numeroAlumnos : $("#num_alumnos").val()};
    var mensajePositivo = "La información se modificó correctamente.";
    var mensajeNegativo = "La información no se pudo modificar.";
    realizarAccion(datosJson, mensajePositivo, mensajeNegativo, true);
  });

  $("#mostrarTodoGrupos").change(function(){
    if($("#mostrarTodoGrupos").prop("checked")) {
      $("#selectCampus").attr("disabled",true);
      $("#selectCarrera").attr("disabled",true);
      $("#tablaGrupos").load("../php/tareasJefeCarrera.php", {accion: "mostrarTablaGruposTodos"});
    } else {
      $("#selectCampus").attr("disabled",false);
      $("#selectCarrera").attr("disabled",false);
      $("#tablaGrupos").load("../php/tareasJefeCarrera.php", {accion: "mostrarTablaGrupos", campus : $("#selectCampus").val(), carrera : $("#selectCarrera").val()});
    }
  })

  $("#btnEliminarGrupo").click(function(){
    var gruposSeleccionados = "";
    $('#modalEliminarGrupo').modal('hide');
    $("input:checkbox:checked").each(function(){
      gruposSeleccionados += $(this).attr("id") + ",";
    })
    gruposSeleccionados = gruposSeleccionados.substring(0, gruposSeleccionados.length - 1);
    var datosJson = {accion: "eliminar", nombres : gruposSeleccionados};
    var mensajePositivo = "Los grupos " + gruposSeleccionados + " se eliminaron correctamente.";
    var mensajeNegativo = "Los grupos " + gruposSeleccionados + " no se eliminaron.";
    realizarAccion(datosJson, mensajePositivo, mensajeNegativo, true);
  })

  $('#modalEliminarGrupo').on('shown.bs.modal', function (e) {
    var check = $("input:checkbox:checked");
    if (check.length <= 0) {
      $('#modalEliminarGrupo').modal('hide');
    }
    var gruposSeleccionados = "";
    check.each(function() {
      gruposSeleccionados += $(this).attr("id") + ",";
    })
    $(".modal-body>div").text("¿Está seguro que quiere eliminar los grupos " + gruposSeleccionados.substring(0,gruposSeleccionados.length - 1) + "?");
  })

  $('#modalModificarGrupo').on('shown.bs.modal', function (e) {
    var check = $("input:radio[name=btnRadio]:checked").val();
    if (typeof check === 'undefined') {
      $('#modalModificarGrupo').modal('hide');
    }
    $("#modalSelectCampus").load("../php/combosPreregistros.php?combo=campus", function() {
      $("#modalSelectCarrera").load("../php/combosPreregistros.php?combo=carrera&campus=" + escape("Puerto Escondido"),function() {
        $("#selectSemestre option").each(function() {
          if ($(this).text() == check.split(",")[0]) {
            $(this).prop("selected","selected");
          }
        });
        $("#modalSelectCampus option").each(function() {
          if ($(this).text() == check.split(",")[1]) {
            $(this).prop("selected","selected");
          }
        });
        $("#modalSelectCarrera option").each(function() {
          if ($(this).text() == check.split(",")[2]) {
            $(this).prop("selected","selected");
          }
        });
      });
    });

    $("#modalSelectCampus").change(function() {
      $("#modalSelectCarrera").load("../php/combosPreregistros.php?combo=carrera&campus=" + escape($(this).val()));
    });
    $("#name_grupo").val($("input:radio[name=btnRadio]:checked").attr("id"));
    $("#num_alumnos").val(check.split(",")[3]);
  })

});

function realizarAccion(datosJson, mensajePositivo, mensajeNegativo, recargarPagina) {
  $.ajax({
    method: "POST",
    url: "../php/tareasJefeCarrera.php",
    data: datosJson
  })
  .done(function( msg ) {
    if (msg == "true") {
      alert(mensajePositivo);
      if (recargarPagina) {
        location.reload();
      } else {
        $("#btnReset").click();
      }
    } else {
      alert(mensajeNegativo);
    }
  })
}