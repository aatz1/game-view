

<?php

$base =  new mysqli("localhost", "root", "", "bd_games");

if($base->connect_errno) {
    echo "<p>Error detected $base->errno --> $banco->connect_error</p> ";
    die ;
}

$base->query("SET NAMES 'utf8'"); //setiing to utf8
$base->query("SET character_set_connection=utf8");
$base->query("SET character_set_client=utf8");
$base->query("SET character_set_results=utf8");
  
?>