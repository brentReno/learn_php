<?php
$data = file_get_contents('https://www.codeschool.com/users/b_ren0.json');
$json_data = json_decode($data, true);
// var_dump($json_data);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Code School Badge Viewer</title>
  </head>
  <body>
    <h1><?php echo $json_data['user']['username']; ?></h1>
  </body>
</html>
