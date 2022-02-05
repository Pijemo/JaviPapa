const crearHeader = () => {

    console.log(window.screen.width)
    let header = document.querySelector(".cabecera");
    const numElementos = 6;
    let divImg = document.createElement("div");
    divImg.setAttribute("id", "logo");
    let img = document.createElement("img");
    let btn_opciones = document.createElement("button");
    let misDiv = [];
    let misEnlaces = [];

    divImg.append(img);
    let nav = document.createElement("nav");    
    nav.appendChild(divImg);
    let comprobarOpciones = true;
    for (let elemento = 0; elemento < numElementos; elemento++) {
        misDiv.push(document.createElement("div"));
        misDiv[elemento].classList.add("enlace");
        
        misEnlaces.push(document.createElement("a"));
        if(window.screen.width < 1300 && elemento > 0){ 
            misDiv[elemento].style.display = "none";
        }
        switch (elemento) {
            case 0:
                if(window.screen.width < 1300){                    
                    misEnlaces[0].append(img);
                    img.setAttribute("src", "img/logo1.png");
                    img.setAttribute("alt", "Logo");
                    img.setAttribute("width", "85px");
                    img.setAttribute("heigth", "85px");                    
                    misEnlaces[0].setAttribute("width", "100%");
                    misEnlaces[0].style.height="100px";
                    
                    

                    btn_opciones.setAttribute("id", "btn_opciones");
                    btn_opciones.style.height = "50px";
                    btn_opciones.style.width = "90px";
                    btn_opciones.style.margin = "30px 0";
                    btn_opciones.style.background = "#e7684d";
                    let txtx_btn =  document.createTextNode(". . .");
                    btn_opciones.append(txtx_btn);  
                                        
                }else{
                    img.setAttribute("src", "img/logo2.png");
                    img.setAttribute("alt", "Logo");
                    let txtIndex = document.createTextNode("Inicio");
                    misEnlaces[0].append(txtIndex);
                }                
                misEnlaces[0].setAttribute("href", "index.php");
               
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
                misEnlaces[4].setAttribute("href", "iniciarsesion.html");
                misEnlaces[4].append(txtIniciarsesion);
                break;
            case 5:
                let txtRegistro = document.createTextNode("Registro");
                misEnlaces[5].setAttribute("href", "registro.html");
                misEnlaces[5].append(txtRegistro);
                break;
        }
        if (window.screen.width < 1300 && elemento > 0) {
                misDiv[elemento].style.background = "#e7684d";
                misDiv[elemento].style.borderRadius = "10%";
                misDiv[elemento].style.width = "100%";
                misDiv[elemento].style.border = "solid black 1px";
                misDiv[elemento].style.marging = "15px"                 
        }
        
        misDiv[elemento].append(misEnlaces[elemento]);
               
        nav.append(misDiv[elemento]);
        if(comprobarOpciones && window.screen.width < 1300){
                    nav.append(btn_opciones);
                    nav.style.background = '#1897b2';
                    nav.style.borderRadius = '2%'; 
                    nav.style.padding ="15px"
                              
                    comprobarOpciones = false;
                } 
                
        //console.log(nav);
        
    }
    if (window.screen.width > 1300) {
        console.log("window.scren.width > 1300 -> MAYOR 1300");
        header.innerHTML = "MENU de ordenador";       

        header.append(nav);
        
    } else if (window.screen.width < 1300) {
        console.log("window.scren.width < 1300 -> MENOR 1300");
        header.innerHTML = "MENU de movil";
        nav.style.position = "relative";
        nav.style.maxHeight = "600px";                  
        header.append(nav);         
        document.getElementById("btn_opciones").addEventListener("click", menuHambur, false);
    }

};

const menuHambur = () => {     
    let enlaces = document.getElementsByClassName("enlace");
    for(let e = 1; e < enlaces.length; e++){
        if(enlaces[e].style.display == "none"){            
            enlaces[e].style.display = "";
        }else{            
            enlaces[e].style.display = "none";
        }        
    }
}
window.addEventListener("load", crearHeader, false);