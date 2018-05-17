function validarInsertar() {
  var password=document.getElementById('password').value;
  var nombre=document.getElementById('nombre').value;
  var apellidos=document.getElementById('apellidos').value;
  var telefono=document.getElementById('telefono').value;
  var ciudad=document.getElementById('ciudad').value;
  var correoflorida=document.getElementById('correoflorida').value;
  var genero=document.getElementById('genero').value;
  var dni=document.getElementById('dni').value;

  if (password == "") {
    alert("El campo contraseña esta vacio");
    return false;
  } else if (nombre == "") {
    alert("El campo nombre esta vacio");
    return false;
  } else if (apellidos == "") {
    alert("El campo apellidos esta vacio");
    return false;
  } else if (telefono == 0) {
    alert("El campo telefono esta vacio");
    return false;
  } else if (ciudad == "") {
    alert("El campo ciudad esta vacio");
    return false;
  } else if (correoflorida == "") {
    alert("El campo correo esta vacio");
    return false;
  } else if (genero == "") {
      alert("El campo género esta vacio");
      return false;
  } else if (dni == "") {
      alert("El campo DNI esta vacio");
      return false;
  }
    else {
    return true;
  }
}
