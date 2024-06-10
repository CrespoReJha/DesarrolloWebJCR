function leer(parametro){
    let contenido = document.getElementById('contenido');
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", 'leer.php?filtro='+parametro, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            correos = JSON.parse(ajax.responseText);
            let html = '';
            for (i=0;i<correos.length;i++){
                html += `<div onclick="vermensaje(${correos[i].id})" style="border: 3px solid black; padding-left: 10px;">
                            <p><span style="font-weight: bold;">Para:</span> ${correos[i].correo}</p>
                            <p><span style="font-weight: bold;">Asunto:</span> ${correos[i].asunto}</p>
                            `;
                if (correos[i].estado == 'N'){
                    html += `<p><span style="font-weight: bold;">Estado:</span> No Leido</p>`;
                }else{
                    html += `<p><span style="font-weight: bold;">Estado:</span> Leido</p>`;
                }
                html += '</div>';
            }
            contenido.innerHTML=html;
        }
    }
    ajax.send();
}

function redactar(){
    let contenido = document.getElementById('contenido');
    contenido.innerHTML = `
    <h3>Mensaje Nuevo</h3>
    <form action="javascript:insertar()" method="post" id="correo-nuevo">
        <label for="correo">Para: </label>
        <input type="email" id="correo" name="correo"><br>
        <label for="asunto">Asunto: </label>
        <input type="text" id="asunto" name="asunto"><br>
        <label for="mensaje">Mensaje: </label>
        <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea><br>
        <button type="submit">Enviar</button>
    </form>
    `;
}

function insertar(){
    var contenido = document.getElementById('contenido');
    var formulario = document.getElementById("correo-nuevo");
  
    var parametros =new FormData(formulario);
    
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    
    ajax.open("post", "insertar.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            //datos.innerHTML = ajax.responseText
            //listar();
            contenido.innerHTML = 'Mensaje Enviado';
        }
    }
    ajax.send(parametros);
}

function vermensaje(id){
    let contenido = document.getElementById('contenido');
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", 'ver.php?id='+id, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            correos = JSON.parse(ajax.responseText);
            console.log(correos);
            for (i=0;i<correos.length;i++){
                if (correos[i].tipo == 'E'){
                    contenido.innerHTML = `
                    <h3 style="padding: 10px;">Mensaje</h3>
                    <div style="border-bottom: 1px solid black;padding: 10px;"><span style="font-weight: bold;">De:</span> ${correos[i].correo}</div>
                    <div style="border-bottom: 1px solid black;padding: 10px;"><span style="font-weight: bold;">Asunto:</span> ${correos[i].asunto}</div>
                    <div style="padding: 10px;"><span style="font-weight: bold;">Mensaje:</span> ${correos[i].mensaje}</div>
                    <button onclick="leer('E')">Volver</button>
                    `;
                }else{
                    contenido.innerHTML = `
                    <h3 style="padding: 10px;">Mensaje</h3>
                    <div style="border-bottom: 1px solid black;padding: 10px;"><span style="font-weight: bold;">Destinatario:</span> ${correos[i].correo}</div>
                    <div style="border-bottom: 1px solid black;padding: 10px;"><span style="font-weight: bold;">Asunto:</span> ${correos[i].asunto}</div>
                    <div style="padding: 10px;"><span style="font-weight: bold;">Mensaje:</span> ${correos[i].mensaje}</div>
                    <button onclick="leer('S')">Volver</button>
                    `;
                }
                
            }
        }
    }
    ajax.send();
}