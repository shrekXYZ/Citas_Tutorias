function iniciarMap(){
    var coord = {lat:24.02253 ,lng:-104.55362};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 13,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}