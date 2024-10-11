const validacion1={
    validacion:""
}
const validacion =document.querySelector('#validacion')
const header = document.querySelector('.ContenidoPrincipalArte2--hijos');
const boton1 = document.querySelector('.botonenviarvalidacion')
function usuarioaceptado(mensaje){
    //creamos una variable donde va a ser que pongamos el texto
    const mensajebienvenida=document.createElement('P');
    //Igualamos el parrafo que acabamos de crear con el atributo textcontent al mensaje que recibe la funcion
    mensajebienvenida.textContent=mensaje;
    //le creamos la clase para despues editarla en css
    mensajebienvenida.classList.add('bienvenido')
    //ponemos el mensaje abajo de donde queremos que salga
    header.appendChild(mensajebienvenida);
    setTimeout(()=>{
        mensajebienvenida.remove();
    },4000)
}
/*validacion.addEventListener('input',function(evento){
    validacion1[evento.target.id]=evento.target.value
})*/

boton1.addEventListener('click',function(evento){
    evento.preventDefault();
    usuarioaceptado("Te has enrolado con exito")
})