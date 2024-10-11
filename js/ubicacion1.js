function iniciarMap(){
    var coord = {lat:24.04803 ,lng:-104.61292};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 13,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}