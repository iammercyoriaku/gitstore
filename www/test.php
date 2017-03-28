<?php 

define('DBNAME', 'onlinestore');
define('DBUSER', 'root');
define('DBPASS', 'ilovecupcakes');

$conn = new PDO('mysql:host=localhost;dbname='.DBNAME, DBUSER, DBPASS);

?>