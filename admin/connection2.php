<?php 

define ('DBSERVER', 'localhost');
define ('DBUSER', 'id2156308_tssgndu');
define ('DBPASS','tssgndu');
define ('DBNAME','id2156308_tss');
$connection = mysqli_connect('localhost', 'id2156308_tssgndu', 'tssgndu' ) or die("Can't connect to server. Please check credentials and try again");
$result = mysqli_select_db($conn, "id2156308_tss") or die("Can't select database. Please check DB name and try again");

?>