<?php



 $c = mysql_connect("localhost","root","1234") or die("Errorqq");
mysql_select_db("traineebd", $c);
 
 define( "DB_SERVER",'localhost');
 define( "DB_USER",'root' );
 define( "DB_PASSWORD",'1234');
 define( "DB_DATABASE",'traineebd');
 

 $mysqli = new mysqli(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE) or die("Error");
 $mysqli->set_charset("utf8")  ;



?>
