function validarInsertar() {
  var valor=document.getElementById('password').value;
  var valor2=document.getElementById('nombre').value;
  var valor3=document.getElementById('apellidos').value;
  var valor4=document.getElementById('telefono').value;
  var valor5=document.getElementById('ciudad').value;
  var valor6=document.getElementById('correoflorida').value;
  var valor7=document.getElementById('genero').value;
  var valor8=document.getElementById('dni').value;

  if (valor == "") {
    alert("El campo contraseña esta vacio");
    return false;
  } else if (valor2 == "") {
    alert("El campo nombre esta vacio");
    return false;
  } else if (valor3 == "") {
    alert("El campo apellidos esta vacio");
    return false;
  } else if (valor4 == 0) {
    alert("El campo telefono esta vacio");
    return false;
  } else if (valor5 == "") {
    alert("El campo ciudad esta vacio");
    return false;
  } else if (valor6 == "") {
    alert("El campo correo esta vacio");
    return false;
  } else if (valor7 == "") {
      alert("El campo género esta vacio");
      return false;
  } else if (valor8 == "") {
      alert("El campo DNI esta vacio");
      return false;
  }
    else {
    return true;
  }
}
