function validar() {
  var valor=document.getElementById('nombre').value;
  var valor2=document.getElementById('apellidos').value;
  var valor3=document.getElementById('telefono').value;
  var valor4=document.getElementById('plazas').value;
  var valor5=document.getElementById('ciudad').value;
  var valor5=document.getElementById('correoflorida').value;
  if (valor == "") {
    alert("El campo nombre esta vacio");
    return false;
  } else if (valor2 == "") {
    alert("El campo apellidos esta vacio");
    return false;
  } else if (valor3 == "") {
    alert("El campo telefono esta vacio");
    return false;
  } else if (valor4 == "") {
    alert("El campo plazas esta vacio");
    return false;
  } else if (valor5 == "") {
    alert("El campo ciudad esta vacio");
    return false;
  } else if (valor5 == "") {
    alert("El campo correo esta vacio");
    return false;
  }
    else {
    return true;
  }
}
