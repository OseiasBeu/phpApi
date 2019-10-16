<!-- <?php
// If strict types are enabled i.e. declare(strict_types=1);
$json_url ='https://api.hgbrasil.com/finance';
$json = file_get_contents($json_url);
$data = json_decode($json, TRUE);
// echo "<pre>";
// print_r($data['results']['currencies']);
// echo "</pre>";
?> -->

<?php 
$json_url = 'https://api.hgbrasil.com/finance';
$json = file_get_contents($json_url);
// $json=str_replace('},
// ]',"}

// ]",$json);
$data = json_decode($json);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dólar</title>
  </head>
  <body>
 <?php  
echo "<pre>";
print_r($data);
echo "</pre>"; 
 ?>

  </body>
</html>