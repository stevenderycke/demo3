<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Demo 3</title>
</head>
<body>
<?php
$results = file_get_contents('http://demo4:8080/');
$results = file_get_contents('http://demo1-elia.ocp.mybpsdemo.be/');
echo $results;
?>
</body>
</html>
