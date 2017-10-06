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


?>

<html>
<head>
<title>Technical Students Society</title>

<?php
 include 'common_bs_files.php';
 include 'connection.php';


?>


</head>	
<script src="jquery.min.js"></script>

<body style="background-image:url(assets/bk88.png)">

<?php
 include 'header.php'?>
  <br/>
<?php 
if(isset($_POST['submit']))
{
	 $id = $_POST['id'];
	 $name1 = $_POST['name1'];
	 $day = $_POST['day'];
	 $month = $_POST['month'];
	 $year = $_POST['year'];
	$imgflag='0';			
	$a1= mysqli_query($conn,"UPDATE events_record SET name='$name1',
		day='$day', month='$month', year='$year'
		WHERE id='$id' ");

		
		echo mysqli_error ($conn);

		 $name=$_FILES['file']['name'];
		 if(!empty($name)){
		 $c="technical_events";
$extension=strtolower(substr($name,strpos($name,'.')+1));
$size=$_FILES['file']['size'];
//$max_size=400000;
$type=$_FILES['file']['type'];
$tmp_name=$_FILES['file']['tmp_name'];
$error=$_FILES['file']['error'];

if(isset($name))
{
	if(!empty($name))
	{
		if(($extension=='jpg' || $extension=='jpeg' || $extension=='png')&& ($type=='image/jpeg'|| $type=='image/png'))
		{
		$location=$c."/";
		if(move_uploaded_file($tmp_name,$location.$name))
		{
			$imgflag=1;
		}
		}
		
	}
}
$location1="admin/".$c."/".$name;
		$a2= mysqli_query($conn,"UPDATE events_record SET image='$location1'
		WHERE id='$id'");
		
		if($a2 && $imgflag){
				echo "<center><h1 style='color:white'>Image Uploaded Successfully";	
		}
		 }
	
		
		
	if($a1 )
	{
		echo "<center><h1 style='color:white'>Record Updated Successfully";
	echo "<a href='delete_event.php' class='btn btn-danger' >Click Here</a></h1></center>";

	}
	else
	{
				echo "<center><h1 style='color:white'>Error Updating Record";

	}
 }
}
 ?>