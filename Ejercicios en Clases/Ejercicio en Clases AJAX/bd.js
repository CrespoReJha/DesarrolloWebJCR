function mostrar() {
    var dato = document.getElementById('datos');
    console.log(dato)
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", "personas.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            datos = JSON.parse(ajax.responseText)
            console.log(datos);
            let elementotabla = document.createElement("table");
            elementotabla.setAttribute("border", "1");
            let elementotr = document.createElement("tr");
            elementotr.style.backgroundColor = "blue";
            elementotr.style.color = "white";
            let elementotd = document.createElement("td");
            elementotd.innerHTML = "Nro"
            elementotr.appendChild(elementotd);
            elementotd = document.createElement("td");
            elementotd.innerHTML = "Nombres"
            elementotr.appendChild(elementotd);
            elementotd = document.createElement("td");
            elementotd.innerHTML = "Apellidos"
            elementotr.appendChild(elementotd);
            elementotd = document.createElement("td");
            elementotd.innerHTML = "Edad"
            elementotr.appendChild(elementotd);
            elementotd = document.createElement("td");
            elementotd.innerHTML = "Sexo"
            elementotr.appendChild(elementotd);
            elementotd = document.createElement("td");
            elementotd.innerHTML = "Ocupacion"
            elementotr.appendChild(elementotd);
            elementotd = document.createElement("td");
            elementotd.innerHTML = "Fotografia"
            elementotr.appendChild(elementotd);
            elementotabla.appendChild(elementotr);
            dato.appendChild(elementotabla);
            for (i = 0; i < datos.length; i++) {
                let elementotr = document.createElement("tr");
                if (i%2==0) {
                    elementotr.style.backgroundColor = "gray";
                }
                let elementotd = document.createElement("td");
                elementotd.innerHTML = i + 1
                elementotr.appendChild(elementotd);
                elementotd = document.createElement("td");
                elementotd.innerHTML = datos[i].nombres
                elementotr.appendChild(elementotd);
                elementotd = document.createElement("td");
                elementotd.innerHTML = datos[i].apellidos
                elementotr.appendChild(elementotd);
                elementotd = document.createElement("td");
                elementotd.innerHTML = datos[i].edad
                elementotr.appendChild(elementotd);
                elementotd = document.createElement("td");
                elementotd.innerHTML = datos[i].sexo
                elementotr.appendChild(elementotd);
                elementotd = document.createElement("td");
                elementotd.innerHTML = datos[i].ocupacion
                elementotr.appendChild(elementotd);
                elementotd = document.createElement("td");
                let elementoimg = document.createElement("img");
                elementoimg.setAttribute("src", "images/"+datos[i].fotografia);
                elementoimg.setAttribute("width", "100");
                elementotd.appendChild(elementoimg);
                elementotr.appendChild(elementotd);
                /*if (i==0)
                    {
                        elementotr.elementotd.selected=true;
                    }*/
                elementotabla.appendChild(elementotr);
            }
        }
    }
    ajax.send();
}