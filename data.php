<?php

// In this file you need to fetch the data you want to send to the chart from the
// database and then return that as a JSON Object
$data->fuel_level = 30;
$jsonData = json_encode($data);
echo $jsonData;
?>