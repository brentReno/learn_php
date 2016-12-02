<?php
$data = file_get_contents('https://www.codeschool.com/users/b_ren0.json');
$json_data = json_decode($data, true);
$courses = $json_data['courses']['completed'];
// var_dump($json_data['courses']['completed']);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Code School Badge Viewer</title>
    <link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">
    <link rel="stylesheet" href="main.css" media="screen" title="no title">
  </head>
  <body>
    <header>
      <h1><?php echo $json_data['user']['username']; ?>'s badges!</h1>
    </header>
    <div class="container">
      <div class="grid">
        <?php
          foreach ($courses as $course) {
            echo '<div class="grid-cell">';
            echo '<img height="190px" src="' . $course["badge"] . '"><br>';
            echo '<a href ="' . $course['url'] . '">' . $course["title"] . '</a>';
            echo '</div>';
          }
         ?>
       </div>
    </div>
  </body>
</html>
