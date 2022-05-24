<?php
$trainraw = file_get_contents("http://cpholidaytrain.ca/data/united-states-position.json");
$trainjson = json_decode($trainraw, true);
 ?>

 <html>
 <head><title>Holiday Train Map URL</title></head>
 <body>
     <?php
     $date = new DateTime($trainjson['LastUpdated']);
     $date->modify("-5 hours");
     printf("Last update from train: %s EST<p>\n", $date->format('m-d-Y H:i:s'));
     printf("Train is currently at %s (%s,%s)<p>\n", $trainjson['Address'], $trainjson['Latitude'], $trainjson['Longitude']);
     printf("<a href='https://maps.google.com/maps?q=%s,%s' target=_blank>View Map</a>\n", $trainjson['Latitude'], $trainjson['Longitude']);
     ?>
 </body>
 </html>
