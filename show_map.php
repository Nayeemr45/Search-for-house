
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery-3.5.1.min.js"></script>

</head>
<body>
<div id="googleMap" style="width: 100%;height:900px; "></div>

<input type="hidden" id="latitude" value="<?php echo $_GET['latitude'];?>">
<input type="hidden" id="longitude" value="<?php echo $_GET['longitude'];?>">

    





<script>
    function initMap() {
        "use strict"
        let latitude1 = $('#latitude').val();
        let longitude1 = $('#longitude').val();

        var latitude2= parseFloat(latitude1);
        var longitude2= parseFloat(longitude1);


console.log(latitude1);
console.log(longitude1);

console.log(latitude2);
console.log(longitude2);
       

    const uluru = { lat: latitude2, lng: longitude2 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("googleMap"), {
          zoom: 18,
          center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
          position: uluru,
          map: map,
        });
}
</script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgEFd1S4iVxaQwAFrRJg5gmtYd3RW2wRc&callback=initMap"></script>

</body>
</html>