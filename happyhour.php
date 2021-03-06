<html lang="en">
    

<head>
   <title>Kasanu coffee</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="cp1.css">
</head>
 
 
        <header><h1>Happy hours at Kasanu Coffee House</h1></header>
              
              <?php
              require 'nav.php';
                  
                  ?>
        
                  
              
    </nav>
       

    <main>
    <section>
        <h3>Happy hour list:</h3>
        <article>
            <p style="font: italic"> Kasanu cofee shop offers you happy ours only on weekends</p>
          <ol>
            <li>Coffee with mufins for $2.</li>
              <li>Choclate milk shake with mufins for $2.</li>
              <li>green tea with organic snacks for $2.</li>
              
            </ol>
        
        </article>
        
        <p><b>You can check our location below in google map incase you are lost :</b></p>
        
        <p> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193671.23574623195!2d-74.0009587533098!3d40.67147780161396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c265bf7c15c191%3A0x6dd258b302f92674!2sCentral%20Perk%20Cafe!5e0!3m2!1sen!2sus!4v1590402982918!5m2!1sen!2sus" width="400" height="300" frameborder="0" style="border:1;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe></p>
        
    <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
<script>
function showPosition() {
    if(navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showMap, showError);
    } else {
        alert("Sorry, your browser does not support HTML5 geolocation.");
    }
}

function showMap(position) {
 
    lat = position.coords.latitude;
    long = position.coords.longitude;
    var latlong = new google.maps.LatLng(lat, long);
    
    var myOptions = {
        center: latlong,
        zoom: 16,
        mapTypeControl: true,
        navigationControlOptions: {
            style:google.maps.NavigationControlStyle.SMALL
        }
    }
    
    var map = new google.maps.Map(document.getElementById("embedMap"), myOptions);
    var marker = new google.maps.Marker({ position:latlong, map:map, title:"You are here!" });
}
 
    function showError(error) {
    if(error.code == 1) {
        result.innerHTML = "You've decided not to share your position, but it's OK. We won't ask you again.";
    } else if(error.code == 2) {
        result.innerHTML = "The network is down or the positioning service can't be reached.";
    } else if(error.code == 3) {
        result.innerHTML = "The attempt timed out before it could get the location data.";
    } else {
        result.innerHTML = "Geolocation failed due to unknown error.";
    }
}
</script>

<body>
    <button type="button" onclick="showPosition();">Show My Position on Google Map</button>
    <div id="embedMap" style="width: 400px; height: 300px;">
  
    </div>
        
     
    
   
    
    
    <footer>
        Copyright &copy; 2020 Kasanu Coffee House<br>
        </footer>
    
    
    
    
    </body>
    
</html>