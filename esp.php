<?php
$Moisture = $_POST["moisture"];
$Pump=$_POST["pump"];
$front="<!DOCTYPE html> <html lang=\"en\"> <head> <meta charset=\"UTF-8\"> <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0,initial-scale=1\"> <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge,chrome=1\"><meta name=\"HandheldFriendly\" content=\"true\"><meta http-equiv=\"refresh\" content=\"30\"> <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"><link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\"><link rel=\"stylesheet\" type=\"text/css\" href=\"pagestyle.css\"> <title>SOIL</title> </head> <body><div id=\"header\" style=\"height:50%;width:100%;\"><h1 style=\"font-size:2.5vw;padding:20px;\">IOT BASED SOIL MOISTURE MONITORING SYSTEM</h1></div><div><ul style=\"position:sticky;\" ><li><a  href=\"index.html\" style=\"text-decoration:none;\">HOME</a></li><li><a class=\"active\" href=\"#contact\"style=\"text-decoration:none;\">SHOW MOISTURE</a></li></ul></div><div><h1 style=\"font-size:3vw; padding:25px;\">Pump : \".$Pump.\"</h1><div><h2 style=\"font-size:3vw; padding:25px;background-color:#2c3e50; color:white;\">% Moisture</h2></div>" ;
$back="</script><script src=\"meter-banao.js\"></script> <script src=\"slideshow.js\"></script></body> </html>";
$bar = "<div  class=\"progress\"> <div id=\"moisture-meter\" class=\"progress-bar\" role=\"progressbar\" style=\"width: 40%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\" color:\"red;\">".$Moisture."</div> </div><div class=\"w3-content w3-section\" style=\"max-width:100%;padding:20px;\">
  <img class=\"mySlides\" src=\"iot_in_agriculture.png\" style=\"width:100%;height:400px;\">
  <img class=\"mySlides\" src=\"Precision-Agriculture.png\" style=\"width:100%;height:400px;\">
  <img class=\"mySlides\" src=\"smart_irrigation.jpg\" style=\"width:100%;height:400px;\">
</div>";
$Write=$front . $bar . $back;
file_put_contents('show_moisture.html',$Write);
?>
