<br>
<h1>DIRECCION DE LA UTC</h1>
<img src="<?php  echo base_url('assets/img/marcador_utc.png');?>" alt="Logo UTC">
<br>
<div id="mapa1" style="width:100%; height:300px; border:2px solid black;">

</div>
<script type="text/javascript">
function initMap(){
  //creando una coordenada//
  var coordenadaCentral=new google.maps.LatLng(-0.9162996798405512, -78.63038942738271);


  var miMapa=new google.maps.Map(
    document.getElementById('mapa1'),
    {
      center:coordenadaCentral,
      zoom:9,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
  );

  var marcadorUTC= new google.maps.Marker({
    position:new google.maps.LatLng(-0.9177800695621345, -78.63298580554672),
    map: miMapa,
    title: 'UTC Matriz',
    icon:'<?php  echo base_url('assets/img/marcador_utc.png');?>'
  });


  var marcadorSalache= new google.maps.Marker({
    position:new google.maps.LatLng(-0.9970462055159047, -78.6184507572261),
    map: miMapa,
    title: 'UTC Campus Salache'
  });


  var marcadorPujili= new google.maps.Marker({
    position:new google.maps.LatLng(-0.9584129186801005, -78.69655573136708),
    map: miMapa,
    title: 'UTC Pujili'
  });


  var marcadorLaMana= new google.maps.Marker({
    position:new google.maps.LatLng(-0.9450903876767969, -79.23107903920554),
    map: miMapa,
    title: 'UTC Campus La Mana',
    icon:'<?php  echo base_url('assets/img/marcador_utc.png');?>'
  });

}

</script>
