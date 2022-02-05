const crearHeader = () => {
    let header = document.querySelector(".cabecera");
    console.log(header);
    let numElementos = 6;
    let misDiv = [];
    let misEnlaces = [];
    let divImg = document.createElement("div");
    divImg.setAttribute("id","logo");
    let img = document.createElement("img");
    img.setAttribute("src", "img/logo2.png");
    img.setAttribute("alt", "Logo");
    
    divImg.append(img);
    let nav = document.createElement("nav");
    nav.appendChild(divImg);

    for (let elemento = 0; elemento < numElementos; elemento++) {
        misDiv.push(document.createElement("div"));
        misDiv[elemento].classList.add("enlace");
        misEnlaces.push(document.createElement("a"));
        switch (elemento) {
            case 0:
                let txtIndex = document.createTextNode("Index");
                misEnlaces[0].setAttribute("href", "index.html");
                misEnlaces[0].append(txtIndex);
                break;
            case 1:
                let txtNosotros = document.createTextNode("Nosotros");
                misEnlaces[1].setAttribute("href", "nosotros.html");
                misEnlaces[1].append(txtNosotros);
                break;
            case 2:
                let txtCarta = document.createTextNode("Carta");
                misEnlaces[2].setAttribute("href", "carta.html");
                misEnlaces[2].append(txtCarta);
                break;
            case 3:
                let txtContacto = document.createTextNode("Contacto");
                misEnlaces[3].setAttribute("href", "contacto.html");
                misEnlaces[3].append(txtContacto);
                break;
            case 4:
                let txtIniciarsesion = document.createTextNode("Iniciar sesión");
                misEnlaces[4].setAttribute("href", "iniciarsesion.php");
                misEnlaces[4].append(txtIniciarsesion);
                break;
            case 5:
                let txtRegistro = document.createTextNode("Registro");
                misEnlaces[5].setAttribute("href", "registro.php");
                misEnlaces[5].append(txtRegistro);
                break;
        }
    misDiv[elemento].append(misEnlaces[elemento]);
    nav.append(misDiv[elemento]);
    //console.log(nav);
    }
    header.append(nav);
    //console.log(misDiv);
    //console.log(misEnlaces);   
};
window.addEventListener("load", crearHeader, false);

