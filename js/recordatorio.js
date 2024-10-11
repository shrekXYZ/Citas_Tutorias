const botonrecordatorio = document.querySelector('#BotonNotificacion12');
botonrecordatorio.addEventListener('click',function(evento){
    Notification.requestPermission().then(resultado=>console.log("El resultado fue"+resultado))
})
if(Notification.permission=='denied'){
    new Notification('Recordatorio',{
        icon:"",
        body:"Por favor de confirmar su asistencia"
    })
}