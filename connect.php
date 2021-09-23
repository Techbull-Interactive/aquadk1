<?php


// define('DB_USER', 'id17433205_rkfitness1');
// define('DB_PASSWORD', 'WA+c@F|Gw~^sEZ4!');
// define('DB_HOST', 'localhost');
// define('DB_NAME', 'id17433205_rkfitness');

define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'aquadk');

$conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die("could not connect database".mysqli_connect_error());

mysqli_set_charset($conn,'utf8'); 

?>

  