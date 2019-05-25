<?php
    $address = 'Praça Sete de Setembro - Belo Horizonte Minas Gerais ';
    $lat = null;
    $lng = null;
    $request_url = 'http://maps.google.com/maps/geo?output=xml&q='.urlencode( $address );
    $xml = simplexml_load_file($request_url) or die("url not loading");
    $status = $xml->Response->Status->code;
    if (strcmp($status, "200") == 0)
    {
        // Successful geocode
       $coordinates = $xml->Response->Placemark->Point->coordinates;
       $coordinatesSplit = split(",", $coordinates);
       // Format: Longitude, Latitude, Altitude
       $lat = $coordinatesSplit[1];
       $lng = $coordinatesSplit[0];
    }
?>