function formValidation() {
  if (confirm("Aceotar?")) {
    let nombre = $("#nombrepais").val();
    let codigo = $("#codfifa").val();
    let clasificacion = $("#posrank").val();
    let titulos = $("#titulosg").val();
    let finales = $("#finalesj").val();

    let mensajes = [];
    let estado = true;

    $("#errors").text("");
    $("#cont-errors").hide();

    if (nombre === "" || nombre == null) {
      mensajes.push("Campo 'Nombre de Pais' requerido");
    }

    if (codigo === "" || codigo == null) {
      mensajes.push("Campo 'Codigo FIFA' requerido");
    } else if (codigo.length > 3 || codigo.length < 3) {
      mensajes.push("El 'Codigo FIFA' debe contener 3 caracteres");
    }

    if (clasificacion === "" || clasificacion == null) {
      mensajes.push("Campo 'Clasificacion FIFA' requerido");
    } else if (clasificacion < 1) {
      mensajes.push("La 'Clasificacion FIFA' debe ser un numero positivo");
    }

    if (titulos === "" || titulos == null) {
      mensajes.push("Campo 'Titulos Ganados' requerido");
    } else if (titulos < 0) {
      mensajes.push("Los 'Titulos Ganados' deben ser 0 o un numero positivo");
    }

    if (finales === "" || finales == null) {
      mensajes.push("Campo 'Finales Jugadas' requerido");
    } else if (finales < 0) {
      mensajes.push("Las 'Finales Jugadas' deben ser 0 o un numero positivo");
    }

    if (mensajes.length > 0) {
      $("#errors").text(mensajes.join("; "));
      $("#cont-errors").show("slow");
      estado = false;
    }

    return estado;
  } else {
    return false;
  }
}
