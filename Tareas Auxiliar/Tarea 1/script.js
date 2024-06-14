function pregunta1() {
  var ajax = new XMLHttpRequest();
  ajax.open("GET", `cambiaratributos.html`, false);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4 && ajax.status == 200) {
      contenido.innerHTML = ajax.responseText;
    }
  };
  ajax.send();
}

function cambiarElemento() {
  let ancho = document.getElementById("ancho").value;
  let alto = document.getElementsByName("alto")[0].value;
  let colorFondo = document.getElementById("color_fondo").value;
  let color = document.querySelector("[name=color]").value;
  let elementoID = document.getElementById("elemento").value;
  let elemento = document.getElementById(elementoID);
  elemento.style.width = `${ancho}px`;
  elemento.style.height = alto + "px";
  elemento.style.backgroundColor = colorFondo;
  elemento.style.color = color;
}

async function pregunta2() {
  const response = await fetch("tabla.html");
  const data = await response.text();
  contenido.innerHTML = data;
}

function tabla() {
  let form = document.getElementById("datosOperacion");
  let data = new FormData(form);
  fetch("calcular.php", { method: "post", body: data })
    .then((response) => response.json())
    .then((data) => crearTabla(data));
}

function crearTabla(data) {
  let tabla = document.getElementById("tabla");
  var htmlString = "<table border=1>";
  data.forEach((fila) => {
    var fila = `<tr>
        <td>${fila[0]}</td>
        <td>${fila[1]}</td>
        <td>${fila[2]}</td>
        <td>${fila[3]}</td>
        <td>${fila[4]}</td>
    </tr>`;
    htmlString += fila;
  });
  htmlString += "</table>";
  tabla.innerHTML = htmlString;
}

async function pregunta3() {//modifique varias cosas de la funcion ya que estaba mas familiarizado de esta forma
  fetch("barra.html")
  .then((response) => response.text())
  .then((data) => {
    contenido.innerHTML = data;
    let barra = document.getElementById('barra');
    barra.addEventListener('change', function() {
      let texto = barra.value;
      var ajax = new XMLHttpRequest();
      ajax.open("GET", `datos.php?texto=${texto}`, true);
      ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
          console.log(ajax.responseText);
          resultados = JSON.parse(ajax.responseText);
          for (let i = 0; i < resultados.length; i++) {
            let div = document.createElement('div');
            div.innerHTML = resultados[i];
            contenido.appendChild(div);
          }
        }
      };
      ajax.send();
    });
  });
}
