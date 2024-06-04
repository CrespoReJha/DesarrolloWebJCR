function ponerTitulo(id){
    let titulo = document.getElementById('titulo');
    titulo.innerHTML=id;
}
function pregunta1(){
    let subMenu = document.getElementById('sub-menu');
    //contenido.className='contenido-preguntas';
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", 'datos.html', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            subMenu.innerHTML = `<div  class="btn-opciones btn-op-principal">
                                Opciones
                                </div>`;
            subMenu.innerHTML += ajax.responseText
        }
    }
    ajax.send();
}
function crearTabla(){
    let filas = document.getElementById('filas').value;
    let columnas = document.getElementById('columnas').value;
    let contenido = document.getElementById('contenido');
    let html = `<table border="1">`;
    for (i=0;i<filas;i++){
        html += `<tr>`
        for (j=0;j<columnas;j++){
            html += `<td id="${i}${j}"><a href="javascript:convertirInput('${i}${j}')">&nbsp;</a></td>`
        }
        html += `</tr>`
    }
    html += `</table>`;
    contenido.innerHTML=html;
}
function convertirInput(id){
    let elemento = document.getElementById(`${id}`);
    console.log(elemento);
    let input = document.createElement('input');
    elemento.innerHTML='';
    input.addEventListener('keypress', function(event){
        if (event.key == 'Enter'){
            elemento.innerHTML = input.value;
        }
    });
    elemento.appendChild(input);
}
function pregunta2(){
    let subMenu = document.getElementById('sub-menu');
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", 'parrafos.html', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            subMenu.innerHTML = `<div  class="btn-opciones btn-op-principal">
                                Opciones
                                </div>`;
            subMenu.innerHTML += ajax.responseText
        }
    }
    ajax.send();
}
let contador = 0;
function ponerParrafos(){
    let contenido = document.getElementById('contenido');
    contenido.className='contenido-pregunta2';
    let texto = document.getElementById('texto');
    let colorFondo = document.getElementById('colorFondo');
    let color = document.getElementById('color');
    //console.log(color.value);
    let parrafo = document.createElement('p');
    parrafo.innerHTML = texto.value;
    parrafo.style.backgroundColor=colorFondo.value;
    parrafo.style.color=color.value;
    parrafo.className='parrafo-pregunta2';
    if (contador == 0){
        contador++;
        contenido.innerHTML='';
    }
    contenido.appendChild(parrafo);
}

function pregunta3(){
    let subMenu = document.getElementById('sub-menu');
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", 'galeria.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            libros = JSON.parse(ajax.responseText);
            subMenu.innerHTML = `<div  class="btn-opciones btn-op-principal">
                                Opciones
                                </div>`;
            let html ='';
            for (i=0;i<libros.length;i++){
                html += `<div>
                        <a href="javascript:mostrarimagen('${libros[i].titulo}', '${libros[i].autor}', '${libros[i].editorial}', '${libros[i].anio}')" ><img id="${libros[i].titulo}" class="imagen-submenu" src="images/${libros[i].imagen}"/></a>
                        </div>`
            }
            subMenu.innerHTML += html;
        }
    }
    ajax.send();
}
function mostrarimagen(id, autor, editorial, anio){  
    let imagen = document.getElementById(`${id}`);
    console.log(imagen.style);
    let imagenContenido = document.createElement('img');
    imagenContenido.src = imagen.src;
    let contenido = document.getElementById('contenido');
    contenido.innerHTML='';
    contenido.appendChild(imagenContenido);
    let datos = document.createElement('div');
    html = `<p>Titulo: ${id}</p>
    <p>Autor: ${autor}</p>
    <p>Editorial: ${editorial}</p>
    <p>Anio: ${anio}</p>`;
    datos.innerHTML=html;
    contenido.appendChild(datos);
}

function pregunta4(){
    let subMenu = document.getElementById('sub-menu');
    subMenu.innerHTML='';
    subMenu.innerHTML = `<button id="botonListar" class="btn-materias btn-opciones btn-op-secundarios">Detalle 1</button>
    <button id="botonInsertar" class="btn-materias btn-opciones btn-op-secundarios">Detalle 2</button>`;
    let listar = document.getElementById('botonListar');
    let insertar = document.getElementById('botonInsertar');
    listar.innerHTML = 'Listar';
    insertar.innerHTML = 'Insertar';

    let contenido = document.getElementById('contenido');
    listar.addEventListener('click', function(){
        var ajax = new XMLHttpRequest() //crea el objetov ajax 
        ajax.open("get", 'listar.php', true);
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {
                libros = JSON.parse(ajax.responseText);
                contenido.innerHTML = '';
                let html ='<table border="1">';
                html += `<tr><td>Imagen</td>
                        <td>Titulo</td>
                        <td>Autor</td>
                        <td>Editorial</td>
                        <td>Anio</td></tr>`;
                for (i=0;i<libros.length;i++){
                    html += `<tr><td><img src="images/${libros[i].imagen}" style="width: 30px;"></td>
                            <td>${libros[i].titulo}</td>
                            <td>${libros[i].autor}</td>
                            <td>${libros[i].editorial}</td>
                            <td>${libros[i].anio}</td></tr>`;
                }
                html+=`</table>`
                contenido.innerHTML += html;
            }
        }
        ajax.send();
    });

    insertar.addEventListener('click', function(){
        fetch("formulario.php")
        .then((response) => response.text())
        .then((data) => {
            contenido.innerHTML = data;
        });
    });
    
}

function crearlibro(){
    var formulario = document.getElementById("datos-libro");
    var parametros = new FormData(formulario);
    let contenido = document.getElementById('contenido');
    fetch("insertar.php",
        {
            method: "POST",
            body: parametros
        }
    )
        .then(response => response.text())
        .then(data => {
            contenido.innerHTML = 'se inserto con exito';
        });
}

function pregunta5(){
    let subMenu = document.getElementById('sub-menu');
    subMenu.innerHTML = `<div  class="btn-opciones btn-op-principal">
                                Opciones
                                </div>`;
    subMenu.innerHTML += `<select name="meses" id="meses">
                            <option value="1">Enero</option>
                            <option value="2">Febrero</option>
                            <option value="3">Marzo</option>
                            <option value="4">Abril</option>
                            <option value="5">Mayo</option>
                            <option value="6">Junio</option>
                            <option value="7">Julio</option>
                            <option value="8">Agosto</option>
                            <option value="9">Septiembre</option>
                            <option value="10">Octubre</option>
                            <option value="11">Noviembre</option>
                            <option value="12">Diciembre</option>
                            </select>`;
    let select = document.createElement('select');
    select.name = 'anios';
    select.id = 'anios';
    //subMenu.innerHTML += `<select name="anios" id="anios">`;
    for (i=1975;i<2024;i++){
        let opcion = document.createElement('option');
        opcion.value = i;
        opcion.innerHTML = i;
        //subMenu.innerHTML += `<option value="${i}">${i}</option>`;
        select.appendChild(opcion);
    }
    subMenu.appendChild(select);
    let contenido = document.getElementById('contenido');
    let meses = document.getElementById('meses');
    let anios = document.getElementById('anios');
    meses.addEventListener('click', function(){
        fetch("calendario.php?anio="+parseInt(document.getElementById('anios').value)+"&mes="+parseInt(document.getElementById('meses').value))
        .then((response) => response.text())
        .then((data) => {
            contenido.innerHTML = data;
        });
     });
    anios.addEventListener('click', function(){
        fetch("calendario.php?anio="+parseInt(document.getElementById('anios').value)+"&mes="+parseInt(document.getElementById('meses').value))
        .then((response) => response.text())
        .then((data) => {
            contenido.innerHTML = data;
        });
     });
}
