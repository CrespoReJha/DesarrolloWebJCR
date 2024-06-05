var nombre = prompt("ingrese su nombre:");
var cu = prompt("ingrese su cu:");

document.getElementById('mensaje').innerHTML = `Nombre: ${nombre} CU: ${cu}`;

mostrarMenu();

function mostrarMenu(){
    //document.getElementById('mensaje').innerHTML='';
    let principal = document.getElementById('principal');
    principal.innerHTML='';
    var ajax = new XMLHttpRequest();
    ajax.open("GET", `menu.html`, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            menu.innerHTML = ajax.responseText;
        }
    };
    ajax.send();
}
function pregunta1(){
    document.getElementById('principal').innerHTML='';
    //document.getElementById('mensaje').innerHTML='';
}
function pregunta2(){
    let principal = document.getElementById('principal');
    principal.innerHTML='';
    let menu = document.getElementById('menu');
    fetch("galeria.php")
    .then((response) => response.text())
    .then((data) => {
        menu.innerHTML = data;
    });
}

function mostrarimagen(id){
    let imagen = document.getElementById(`${id}`);
    let imagenPrincipal = document.createElement('img');
    imagenPrincipal.src = imagen.src;
    imagenPrincipal.className='imagen-principal';
    let principal = document.getElementById('principal');
    principal.innerHTML='';
    principal.appendChild(imagenPrincipal);
    let mensaje = document.getElementById('mensaje');
    mensaje.innerHTML = imagen.id;
}
function pregunta3(){
    let mensaje = document.getElementById('mensaje');
    mensaje.innerHTML = '';
    let principal = document.getElementById('principal');
    principal.innerHTML='';
    var ajax = new XMLHttpRequest();
    ajax.open("GET", `login.php`, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            principal.innerHTML = ajax.responseText;
        }
    };
    ajax.send();
}
let login = 'no logueado';
function autenticarUsuario(){
    let formulario = document.getElementById('login');
    
    var parametros =new FormData(formulario);
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    
    ajax.open("post", "autenticar.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            if (ajax.responseText!='no autenticado'){
                login = JSON.parse(ajax.responseText)
                document.getElementById('mensaje').innerHTML = 'usuario autenticado';
                document.getElementById('encabezado').innerHTML = `<h1>Usuario: ${login.correo}  Nivel: ${login.nivel}</h1>`
            }else{
                document.getElementById('mensaje').innerHTML = 'usuario NO autenticado';
            }
        }
    }
    ajax.send(parametros);
}
function pregunta4(){
    if (login == 'no logueado'){
        let mensaje = document.getElementById('mensaje');
        mensaje.innerHTML = 'El usuario aun no se ha logueado';
    }else{
        var principal = document.getElementById('principal');
        var ajax = new XMLHttpRequest() //crea el objetov ajax 
        if (login.nivel == 1) {
            ajax.open("get", "listar.php?nivel=1", true);
        }
        else {
            ajax.open("get", "listar.php?nivel=0", true);
        }
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {
                principal.innerHTML = ajax.responseText
            }
        }
        ajax.send();        
    }   
}
function pregunta5(){
    let principal = document.getElementById('principal');
    principal.innerHTML='';
    fetch("datos.php")
    .then((response) => response.text())
    .then((data) => {
        libros = JSON.parse(data);
        select = document.createElement('select');
        select.id = 'select-libros';
        for (i=0;i<libros.length;i++){
            opcion = document.createElement('option');
            opcion.innerHTML = libros[i].titulo;
            opcion.value = libros[i].imagen;
            select.appendChild(opcion);
        }
        document.getElementById('mensaje').innerHTML = '';
        document.getElementById('mensaje').appendChild(select);

        select.addEventListener('change', function() {
            let imagenPrincipal = document.createElement('img');
            imagenPrincipal.src = 'images/'+select.value;
            imagenPrincipal.className='imagen-principal';
            let principal = document.getElementById('principal');
            principal.innerHTML='';
            principal.appendChild(imagenPrincipal);
        });
    });
}
//let sel = document.getElementById('select-libros');

