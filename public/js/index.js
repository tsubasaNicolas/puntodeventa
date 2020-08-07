document.onkeydown = function(evt) {
    evt = evt || window.event;
    if (evt.keyCode == 27) {
     // document.querySelector(".nav-menu").classList.add("cierre");
     $(".nav-menu").removeClass("show");
    }
};
$(document).ready(function(){
  $(".contenido").click(function(){
    $(".nav-menu").removeClass("show");
  });
});
$(document).ready(function(){
  $(".sidebar").click(function(){
    $(".nav-menu").removeClass("show");
  });
});



//Dar la clase active a lin que contenga la url en la que me encuentro
const currentLocation = location.href;
const menuItem = document.querySelectorAll('.nav-menu li a');
const menuLength = menuItem.length
for(let i=0; i < menuLength; i++){
  if(menuItem[i].href === currentLocation){
    menuItem[i].className = "active"
  }
}



/*(function(){
  var current = window.location.pathname.split('/')[1];
  if (current === "") return;
  var menuItems = document.querySelectorAll('.cabecera .nav-menu li a');
  for (var i= 0, len = menuItems.length; i <len; i++){
    if (menuItems[i].getAttribute("href").indexOf(current)!== -1){
      menuItems[i].className = "is-active";
    }
  }
})();*/


/*
$('.cabecera .nav-menu li').click(function(){
  $(this).addClass("active").siblings().removeClass("active");
})
*/
//function that display value 
function dis(val) 
{ 
  document.getElementById("result").value+=val 
} 
//function that clear the display 
function clr() 
{ 
  document.getElementById("result").value = "" 
} 
//alert("La resolución de tu pantalla es: " + screen.width + " x " + screen.height) 

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
  });

  //Ingreso de dinero
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
  });
// dropdown departamentos  inventario.html
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems);
  });


  //mostrar ocultar calculadora

  function muestra_oculta(id){
    if (document.getElementById){ //se obtiene el id
    var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
    el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
    }
    }
    window.onload = function(){/*hace que se cargue la función lo que predetermina que div estará oculto hasta llamar a la función nuevamente*/
    muestra_oculta('teclado');/* "contenido_a_mostrar" es el nombre que le dimos al DIV */
    }


    //teclado de calculadora funciones 
    		//function that display value 
		function dis(val) 
		{ 
			document.getElementById("result").value+=val 
		} 

		//function that clear the display 
		function clr() 
		{ 
			document.getElementById("result").value = "" 
		} 

    function cancelar(){
      document.getElementsById("ingresoDinero").setAttribute("diplay", "none"); 

    }
    //togle menu

    document.querySelector(".menu-btn").addEventListener("click", () => {
      
      document.querySelector(".nav-menu").classList.toggle("show");
    });
    
    window.onclick = function()
    {
     
     

    }

//promos-deptos
function despliegueDeptos() {
  var element = document.getElementById("deptos");
  element.classList.toggle("promos-deptos");
  var deptogirar = document.getElementById("deptogirar");
  deptogirar.classList.toggle("girar");
}

function desplieguePromos() {
  var element = document.getElementById("promos");
  element.classList.toggle("promos-deptos");
  var deptogirar = document.getElementById("promogirar");
  deptogirar.classList.toggle("girar");
}




