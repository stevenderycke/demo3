<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Demo 3</title>
</head>
<body>
<?php
  ini_set('default_socket_timeout', 7); //7 seconds 
  $url = 'http://demo4:8080/';
  //$url = 'http://demo1-elia.ocp.mybpsdemo.be/';
  //$url = 'http://demo-different-elia-project.ocp.mybpsdemo.be/';
  //$url = 'http://10.131.0.252:8080';
  echo "fetching $url: </br>";
  try {
      $results = file_get_contents($url);
      echo $results;
  } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
  }
?>
</body>
</html>
