
function saludar() {
    alert('Hola')
};

//Esconde el mensaje flash al cabo de 3 segundos!
setTimeout(() => {
    let obj = document.getElementById('mensaje');
    if (obj) {
        obj.style.display = 'none';
    }

}, 3000);