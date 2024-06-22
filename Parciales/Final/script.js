function pregunta1(){
    let contador = document.getElementById('contador');
    let numeroActual = parseInt(contador.innerHTML);
    numeroActual++;
    contador.innerHTML = numeroActual;
}
function cambiarColor(){
    let select = document.getElementById('ids');
    let color = document.getElementById('color-secciones');
    console.log(color)
    let elemento = document.getElementById(`${select.value}`)
    console.log(elemento);
    elemento.style.backgroundColor = color.value;
}
function pregunta2(){
    let subMenu = document.getElementById('sub-menu');
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", 'pregunta2.html', true);
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
var resultados = Array();
function sumar(){
    let cantidad = document.getElementById('cantidad').value;
    let contenido = document.getElementById('contenido');
    contenido.className='pregunta2';
    html = '';
    for (i=0; i<cantidad;i++){
        html += `<div> 1 + ${i+1} = <input id="resultado${i+1}"></div>`;
        resultados[i] = 1 + (i+1);
    }
    html += `<button onclick="calificar()">Calificar</button>`;
    contenido.innerHTML = html;
}
function calificar(){
    let cantidad = document.getElementById('cantidad').value;
    for (i=0; i<cantidad;i++){
        resultado = document.getElementById(`resultado${i+1}`);
        if (resultados[i]==resultado.value){
            resultado.style.backgroundColor='green';
        }else{
            resultado.style.backgroundColor='red';
        }

    }
}
function restar(){
    let cantidad = document.getElementById('cantidad').value;
    let contenido = document.getElementById('contenido');
    contenido.className='pregunta2';
    html = '';
    for (i=0; i<cantidad;i++){
        html += `<div> 1 - ${i+1} = <input id="resultado${i+1}"></div>`;
        resultados[i] = 1 - (i+1);
    }
    html += `<button onclick="calificar()">Calificar</button>`;
    contenido.innerHTML = html;
}
function multiplicar(){
    let cantidad = document.getElementById('cantidad').value;
    let contenido = document.getElementById('contenido');
    contenido.className='pregunta2';
    html = '';
    for (i=0; i<cantidad;i++){
        html += `<div> 1 * ${i+1} = <input id="resultado${i+1}"></div>`;
        resultados[i] = 1 * (i+1);
    }
    html += `<button onclick="calificar()">Calificar</button>`;
    contenido.innerHTML = html;
}
function dividir(){
    let cantidad = document.getElementById('cantidad').value;
    let contenido = document.getElementById('contenido');
    contenido.className='pregunta2';
    html = '';
    for (i=0; i<cantidad;i++){
        html += `<div> 1 / ${i+1} = <input id="resultado${i+1}"></div>`;
        resultados[i] = 1 / (i+1);
    }
    html += `<button onclick="calificar()">Calificar</button>`;
    contenido.innerHTML = html;
}
var alumnos = Array()
function pregunta4(){
    let subMenu = document.getElementById('sub-menu');
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", 'pregunta4.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            subMenu.innerHTML = `<div  class="btn-opciones btn-op-principal">
                                Opciones
                                </div>`;
            alumnos = JSON.parse(ajax.responseText);
            let select = document.createElement('select');
            let materias = Array();
            console.log(alumnos);
            for (i=0; i<alumnos.length;i++){
                materias[i] = alumnos[i].materia;
            }
            console.log(materias);
            let band = false;
            let auxiliar = Array();
            for (i=0; i<alumnos.length;i++){
                if (i==0){
                    auxiliar[i]=materias[i];
                    opcion = document.createElement('option');
                    opcion.innerHTML = materias[i];
                    opcion.value = materias[i];
                    select.appendChild(opcion);
                }else{
                    for (j=0; j<auxiliar.length;j++){
                        if (auxiliar[j] == materias[i]){
                            band = true;
                        }
                    }
                    if (!band){
                        auxiliar[auxiliar.length] = materias[i];
                        opcion = document.createElement('option');
                        opcion.innerHTML = materias[i];
                        opcion.value = materias[i];
                        select.appendChild(opcion);
                        band = false;
                    }
                }
            }
            console.log(auxiliar);
            select.addEventListener('change', function(){
                let html = '<ul>';
                let materia = select.value;
                for (i=0; i<alumnos.length;i++){
                    if (materia == alumnos[i].materia){
                        html += `<li>
                        ${alumnos[i].nombres_apellidos}
                        </li>`;
                    }
                    
                }
                html += '</ul>'
                document.getElementById('contenido').innerHTML = html;
            });
            subMenu.appendChild(select);
        }
    }
    ajax.send();
}

function pregunta5(){
    let subMenu = document.getElementById('sub-menu');
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", 'pregunta5.html', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            subMenu.innerHTML = `<div  class="btn-opciones btn-op-principal">
                                Opciones
                                </div>`;
            subMenu.innerHTML += ajax.responseText; 
            
        }
    }
    ajax.send();
    var ajax2 = new XMLHttpRequest() //crea el objetov ajax 
    ajax2.open("get", 'login.php', true);
    ajax2.onreadystatechange = function () {
        if (ajax2.readyState == 4) {
            document.getElementById('contenido').className='pregunta5';
            document.getElementById('contenido').innerHTML= ajax2.responseText;
        }
    }
    ajax2.send();
}
function llenarInput(valor){
    let password = document.getElementById('password');
    let valorAnterior = password.value;
    valorAnterior += valor;
    password.value = valorAnterior;
}
function entrar(){
    let correo  =document.getElementById('correo').value;
    let password = document.getElementById('password').value;
    console.log(correo);
    console.log(password);
    console.log('autenticar.php?correo='+correo+'&password='+password)
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", "autenticar.php?correo="+correo+"&password="+password, false);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            console.log(ajax.responseText);
            document.getElementById('contenido').innerHTML= ajax.responseText;
        }
    }
    ajax.send();
}
function limpiar(){
    let password = document.getElementById('password');
    password.value='';
}

function pregunta3(){
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", "pregunta3.php", false);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            document.getElementById('contenido').innerHTML= ajax.responseText;
        }
    }
    ajax.send();
}