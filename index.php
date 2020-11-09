<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>

 <?php
echo 'Endpoint is ' .$_ENV["PRIVATE_APP_URL"] . '!';
?>

 <?php

$ch = curl_init();
 
//Set the URL that you want to GET by using the CURLOPT_URL option.
//curl_setopt($ch, CURLOPT_URL, 'https://swapi.dev/api/people/1');
curl_setopt($ch, CURLOPT_URL, $_ENV["PRIVATE_APP_URL"]);
 
//Set CURLOPT_RETURNTRANSFER so that the content is returned as a variable.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
//Set CURLOPT_FOLLOWLOCATION to true to follow redirects.
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
 
//Execute the request.
$data = curl_exec($ch);
 
//Close the cURL handle.
curl_close($ch);
 
//Print the data out onto the page.
echo $data;

 ?>
 
 </body>
</html>