const recordar = document.querySelector('#BotonNotificacion12');
recordar.addEventListener('click',function(){
    new Notification("Recordatorio",{
        icon:"",
        body:"Recuerda confirmar tu asesoria"
    })
})