<!DOCTYPE HTML>

<head>

<!-- Define Charset -->
<meta charset="utf-8"/>

<!-- Responsive Metatag -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

<!-- Page Title -->
<?php slot('title') ?>
<?php echo sprintf('cambiofacil | mapa')?>
<?php end_slot(); ?>

<link rel="shortcut icon" href="/images/chance.ico" type="image/x-icon" />
<!--[if lt IE 9]>

<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<link href="css/application-6671d70fe98684c10f2a03b968b15224.css" media="screen" rel="stylesheet" />
<link href="css/main-2a5910dc32a4ba2ef2d80071822a38f4.css" media="screen" rel="stylesheet" />
<script src="js/stream.js"></script>
<script src="js/application-0bb47302cbdf6ed4cffeda43e8b82c17.js"></script>
<script src="js/main-998eca37f51dad39dc09fd6acb2dad3e.js"></script>

<script src="http://maps.google.com/maps?file=api&amp;v=2.x&amp;key=ABQIAAAAzr2EBOXUKnm_jVnk0OJI7xSosDVG8KKPE1-m51RBrvYughuyMxQ-i1QfUnH94QxWIa6N4U6MouMmBA"
            type="text/javascript"></script>
    <script type="text/javascript">

    var map;
    var geocoder;

    function initialize() {
      map = new GMap2(document.getElementById("map_canvas"));
      map.setCenter(new GLatLng(0.357802,-78.111806), 15);

      // insertar los controles
      map.addControl(new GSmallMapControl());
      map.addControl(new GMapTypeControl());

      geocoder = new GClientGeocoder();
    }

    // addAddressToMap() is called when the geocoder returns an
    // answer.  It adds a marker to the map with an open info window
    // showing the nicely formatted version of the address and the country code.
    function addAddressToMap(response) {
      map.clearOverlays();
      if (!response || response.Status.code != 200) {
        alert("Lo sentimos, no se ha encontrado su dirección");
      } else {
        place = response.Placemark[0];
        point = new GLatLng(place.Point.coordinates[1], place.Point.coordinates[0]);

        map.setCenter(point, 15);

        marker = new GMarker(point, {draggable: true});

        GEvent.addListener(marker, "dragstart", function() {
          map.closeInfoWindow();
        });

        GEvent.addListener(marker, "dragend", function() {
          document.getElementById("punto").value = marker.getLatLng().toUrlValue();
          marker.openInfoWindowHtml(place.address);
          generateKML(place.address, marker.getLatLng().lng(), marker.getLatLng().lat());
        });

        map.addOverlay(marker);
        marker.openInfoWindowHtml(place.address);
        document.getElementById("punto").value = marker.getLatLng().toUrlValue();

        generateKML(place.address, place.Point.coordinates[0], place.Point.coordinates[1]);

      }
    }

    // showLocation() is called when you click on the Search button
    // in the form.  It geocodes the address entered into the form
    // and adds a marker to the map at that location.
    function showLocation() {
      var address = document.forms[0].q.value;
      geocoder.getLocations(address, addAddressToMap);
    }

   // findLocation() is used to enter the sample addresses into the form.
    function findLocation(direccion, empresa ) {
      document.forms[0].q.value = direccion;
      document.getElementById("empresa").value = empresa;
      showLocation();
    }

    function generateKML(description, lng, lat){
      document.getElementById("kml").value = '';
      var kml = '<?xml version="1.0" encoding="UTF-8"?>\n';
      kml = kml + '<kml xmlns="http://earth.google.com/kml/2.2">\n';
      kml = kml + '<Placemark>\n';
      kml = kml + '\t<name>' + document.getElementById("empresa").value + '</name>\n';
      kml = kml + '\t<description>' + description + '</description>\n';
      kml = kml + '\t<Point><coordinates>' + lng + ',' + lat + ',0</coordinates></Point>\n';
      kml = kml + '</Placemark>\n';
      kml = kml + '</kml>\n'
      document.getElementById("kml").value = kml;
    }

    </script>

<style>
/* Badger
------------------------- */

[class*="badger"] {
    position: relative;
    margin: 15px 0;
    padding: 39px 19px 14px;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 6px;
}

[class*="badger"]:after {
    content: attr(data-badger);
    position: absolute;
    top: 0;
    padding: 3px 7px;
    font-size: 12px;
    font-weight: bold;
    background: #999;
    color: #fff;
}

.badger-left:after {
    left: 0;
    border-radius: 6px 0 6px 0;
}

.badger-right:after {
    right: 0;
    border-radius: 0 6px 0 6px;
}

.badger-danger:after {
    background: #d9534f;
}

.badger-warning:after {
    background: #f0ad4e;
}

.badger-success:after {
    background: #5cb85c;
}

.badger-info:after {
    background: #5bc0de;
}

.badger-inverse:after {
    background: #222;
}

.carousel>.carousel-inner>.item>.circleElement {
    background-color: #000;
    border-radius: 50%;
    position: absolute;
    top: 11%;
    left: 39%;
    width: 400px;
    height: 400px;
    opacity: .5;
}
.carousel-indicators {
    top: 35px;
    background: #404549;
    padding: 30px;
    border-radius: 10px;
}
.carousel-indicators li { cursor: pointer }
.carousel-control {
    width: 60px;
    height: 0;
    margin-top: -20px;
    font-size: 100px;
    background: none;
    border: none;
    font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif;
    font-weight: 300;
}
.carousel-indicators li {
    background-color: #999;
    background-color: rgba(255,255,255,0.3);
}
.carousel-caption {
    padding: 35px;
    text-align: center;
}
.carousel-caption h4 {
    font-family: "lato";
    font-weight: 100;
    font-size: 61px;
}
.carousel-caption p {
    font-family: "lato";
    margin-top: 39px;
    font-size: 22px;
    margin-bottom: -8px;
    font-weight: 300;
    line-height: 30px;
}
.carousel-fade .carousel-inner .item {
    opacity: 0;
    -webkit-transition-property: opacity;
    -moz-transition-property: opacity;
    -o-transition-property: opacity;
    transition-property: opacity;
}
.carousel-fade .carousel-inner .active { opacity: 1 }
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
    left: 0;
    opacity: 0;
    z-index: 1;
}
.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right { opacity: 1 }
.carousel-fade .carousel-control { z-index: 2 }
@media only screen and (max-width:767px) {
    h1 { font-size: 30px !important }
    .carousel-caption {
        padding: 15px;
        text-align: center;
    }
    .carousel-caption h4 { font-size: 30px }
    .carousel-caption p {
        margin-top: 10px;
        font-size: 10px;
        margin-bottom: -10px;
    }
    body { padding: 0 !important }
    .carousel { margin-bottom: 0 }
    .hero-unit { padding-bottom: 60px }
    .hero-unit p { font-size: 16px }
}
.carousel-container {
    width: 80% !important;
    padding-left: 10%;
    margin-top: 35px;
}
</style>

</head>
<body onload="initialize()">


<!-- Content Container  -->
<div class="bg-container">

<!-- About Start -->
<div id="about" class="about">
<div class="wrapper">

     <!-- About Title -->
     <div class="title">
         <div class="divi1"></div><p class="title-spc">Ver Mapa</p><div class="divi1"></div>
     <div class="clear"></div>

<section id="fluidGridSystem">
  <div class="row-fluid show-grid">
    
    <strong>Ir a:</strong> <a href="javascript:void(0)" title="Click para generar mapa" onclick="findLocation('<?php echo $_GET['calle'] ?>. .<?php echo $_GET['ciudad'] ?>. .<?php echo $_GET['provincia'] ?>', '');return false;"><strong><?php echo $_GET['calle']?>, <?php echo $_GET['provincia'] ?> - <?php echo $_GET['ciudad'] ?></strong></a><br/>
    
    <div style='position:relative;display:none'>
    <p>
         <b>Escribe el nombre de tu empresa:</b>
         <input id="empresa" type="text" size="40"/>
    </p>
    </div>

    <form action="#" onsubmit="showLocation(); return false;">
        <div style='position:relative;display:none'>
        <strong>Dirección de la casa de beneficencia: </strong>
        <div style='position:relative;display:none'>
        <input type="text" name="q" value="<?php echo $_GET['calle'] ?>" class="address_input" size="40" />
        </div>
        <?php echo $_GET['calle']?> <input type="submit" name="find" value="Generar mapa" class="btn btn-success" />
        <?php echo $_GET['cb']?>
        </div>
    </form>

    <center>
        <div id="map_canvas" style="width: 700px; height: 310px"></div>
    </center>

    <div style='position:relative;display:none'>
    <p>
      <b>Coordenadas:</b>
      <input id="punto" type="text" size="40"/>
    </p>
    <p>
      <b>KML:</b>
      <textarea id="kml" rows="20" cols="100">
      </textarea>
    </p>
    </div>

   </div>
</section>

     <div class="divi2"></div>
     </div>
</div>
</div><!-- About End -->

<!-- Clear -->
<div class="clear"></div>

</div><!-- Content Container End  -->

<!-- Video PopUp -->

</body>
</html>
