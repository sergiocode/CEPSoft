//BOTONOES DE ABRIR LOGIN
const open = document.getElementById('open');
const modal_container = document.getElementById('modal_container');
const close = document.getElementById('close');


open.addEventListener('click', () => {
  modal_container.classList.add('show');  
});

close.addEventListener('click', () => {
  modal_container.classList.remove('show');
});


/*////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////*/

//mostrar password
/*function show() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'text');
}
//ocultar password
function hide() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'password');
}*/

var passworcitas = 0;

document.getElementById("ojete").addEventListener("click", function () {
    if (passworcitas == 0) {
        passworcitas = 1;
        show();
    } else {
        passworcitas = 0;
        hide();
    }
}, false);