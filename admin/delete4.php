<?php
session_start();

$u=$_SESSION["username"];
$p=$_SESSION["password"];
//echo $a;
//echo $b;

if($u==null || $p==null)
{
	 die("<script>location.href = 'admin1.php'</script>");
}
else
{
	$a=$_GET['id'];

	include 'connection.php';
	include 'connection2.php';

	$query3=mysqli_query($conn,"DELETE FROM events_record WHERE  id='$a' ");
 echo "<script language=\"JavaScript\">\n";
				echo "alert(' Record Deleted. click ok to ensure');\n";
				echo "window.location='delete_tfevent.php'";
				echo "</script>";
}
?>