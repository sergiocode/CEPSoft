// Inicio de la configuración de diapositivas.

// Declaración de variables.
var Fotos; // Lugar donde se almacenara la ruta de la imagen.
var V_max; // Longitud máxima del vector "Fotos".
var aux;   // Auxiliar para configuración.
var aux_2; // Auxiliar para programación.
$(function () {
	
	$('#myform').submit(function () {
		console.log(Fotos[aux_2]);
		$('#Diapositiva').val(Fotos[aux_2]);
		return true;
	});
});



// Inicio de variables.
Fotos = new Array(); // Crea el vector para las fotos.
aux_2 = 0; // Inicia la variable auxiliar de programación con valor 0.

// Rutas de imagenes.
Fotos[0] = "../media/img/avatar/perfil_user0.png" /* Aqui pones la ruta del enlace a la imagen */
Fotos[1] = "../media/img/avatar/perfil_user1.png" /* Aqui pones la ruta del enlace a la imagen */
Fotos[2] = "../media/img/avatar/perfil_user2.png" /* Aqui pones la ruta del enlace a la imagen */
Fotos[3] = "../media/img/avatar/perfil_user3.png" /* Aqui pones la ruta del enlace a la imagen */
Fotos[4] = "../media/img/avatar/perfil_user4.png" /* Aqui pones la ruta del enlace a la imagen */
Fotos[5] = "../media/img/avatar/perfil_user5.png" /* Aqui pones la ruta del enlace a la imagen */
Fotos[6] = "../media/img/avatar/perfil_user6.png" /* Aqui pones la ruta del enlace a la imagen */
Fotos[7] = "../media/img/avatar/perfil_user7.png" /* Aqui pones la ruta del enlace a la imagen */
Fotos[8] = "../media/img/avatar/perfil_user8.png" /* Aqui pones la ruta del enlace a la imagen */
Fotos[9] = "../media/img/avatar/perfil_user9.png" /* Aqui pones la ruta del enlace a la imagen */
Fotos[10] = "../media/img/avatar/perfil_user10.png" /* Aqui pones la ruta del enlace a la imagen */
Fotos[11] = "../media/img/avatar/perfil_user11.png" /* Aqui pones la ruta del enlace a la imagen */
Fotos[12] = "../media/img/avatar/perfil_user12.png" /* Aqui pones la ruta del enlace a la imagen */
Fotos[13] = "../media/img/avatar/perfil_user13.png" /* Aqui pones la ruta del enlace a la imagen */

V_max = Fotos.length; // Obtiene la longitud del vector.
V_max = V_max - 1; // Diminuye uno su valor dado que V_max coge un valor a más.

// Fin de la configuración de diapositivas.

// Inicio de la programación de diapositivas.

function siguiente() {

	if (aux_2 == V_max) {
		aux_2 = 0;
	}

	else {
		aux_2 = aux_2 + 1;

	}
	document.images.foto.src = Fotos[aux_2];

}

// Pasar a la siguiente imagen.
function anterior() {

	if (aux_2 == 0) {
		aux_2 = V_max;
	}

	else {
		aux_2 = aux_2 - 1;
	}
	document.images.foto.src = Fotos[aux_2];

}


//FUNCIONES PARA LA PASSWORD
/*
function show() {
	var p = document.getElementById('pwd');
	p.setAttribute('type', 'text');
}
//ocultar password
function hide() {
	var p = document.getElementById('pwd');
	p.setAttribute('type', 'password');
}

var passworcitas = 0;

document.getElementById("ojo").addEventListener("click", function () {
	if (passworcitas == 0) {
		passworcitas = 1;
		show();
	} else {
		passworcitas = 0;
		hide();
	}
}, false);	
*/

//registrar user