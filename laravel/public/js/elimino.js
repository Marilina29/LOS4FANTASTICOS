var form = document.querySelector(".eliminoProd");

function eliminarProd(){
  window.location.assign("/");
}

var button = document.querySelector(".eliminoProd");

button.onclick = function(){
  var confirmacion = confirm("seguro que quieres eliminar el producto?");
  if (confirmacion) {
    return window.location.assign("/");
  } else {
    return window.location.assign();
  }
}
