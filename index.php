<?php
    // Value to push
    $pushThis = 'Name: Jorit Vásconez Gerlach';
    // Path to JSON from this PHP file
	$jsonPath = 'jsonName.json';
    // Getting JSON plain text
	$jsonContent = file_get_contents($jsonPath);
    // Get JSON values
	$json = json_decode($jsonContent, true);
    // Push variable to array in JSON
	array_push($json, $pushThis);
    // Make plain text out of it
	$data = json_encode($json, JSON_PRETTY_PRINT);
    // Overwrite the JSON file with new JSON code
    file_put_contents($jsonPath, $data);