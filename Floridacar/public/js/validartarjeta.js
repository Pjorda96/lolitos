function validarTarjeta() {
  var password=document.getElementById('destino').value;
  var nombre=document.getElementById('salida').value;
  var apellidos=document.getElementById('fecha').value;
  var telefono=document.getElementById('precio').value;
  var ciudad=document.getElementById('vehiculo').value;
  var correoflorida=document.getElementById('plazas').value;
  var genero=document.getElementById('hora').value;


  if (destino == "") {
    alert("El campo destino esta vacio");
    return false;
  } else if (salida == "") {
    alert("El campo salida esta vacio");
    return false;
  } else if (fecha == "") {
    alert("El campo fecha esta vacio");
    return false;
  } else if (precio == 0) {
    alert("El campo precio esta vacio");
    return false;
  } else if (vehiculo == "") {
    alert("El campo vehiculo esta vacio");
    return false;
  } else if (plazas == 0) {
    alert("El campo plazas esta vacio");
    return false;
  }  else if (hora == "") {
      alert("El campo hora esta vacio");
      return false;
  }
    else {
    return true;
  }
}
