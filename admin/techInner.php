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

include 'connection.php';


?>
<html lang="en">
<head>
<?php
include 'common_bs_files.php';
?>

</head>


<body style="background-image:url(bk8.jpg)">
<?php include 'header.php'; ?>
	<div class="row" ><br/><br/>
	<div class="col-sm-12">
	<div class="col-sm-1" ></div>
	<div class="col-sm-10" >

	<form role="form" action="techInner.php" method="post" enctype="multipart/form-data"
			class="form" style="color:white; padding:2%;border:1px solid white;border-radius:1%"> 
	<h1>Add Technical Event</h1>
	<div class="form-group">
			  <label for="id" class="td">Event Name</label>
			  <input type="text" class="form-control" name="name"  id="datepicker1" placeholder="Enter Name"
			  style="width:300px;"  required>
    </div>
	
	<div class="form-group">
		<label for="id" class="td">Event Date</label>
			   <input  class="form-control" name="day" id="day"  placeholder="Enter Day"
			   style="width:300px;"  > <br/>
			   <input  class="form-control" name="month" id="month"  placeholder="Enter Month"
			   style="width:300px;" >  <br/>
			   <input  class="form-control" name="year" id="year"  placeholder="Enter Year"
			   style="width:300px;"  required> 
    </div>
	
	<div class="form-group">
      <label for="file" class="td"> <label for="id" class="td">Event Pic</label>
      <input type="file" class="form-control" name="file" id="file" placeholder="Enter pic"
	  style="width:300px;" required>
    </div>
    
    <button type="submit" value="submit" name="submit" class="btn btn-danger active">INSERT RECORD</button>
	</form>	
	
 <?php
	
	 if(isset($_POST['submit']))
	 {
		 $a1=$_POST['name'];
		 $flag='1';
		 $sum='0';
		 $id='0';
		 $id2='0';
		 $imgflag='0';
		 $day=$_POST['day'];
		 $month=$_POST['month'];
		 $year=$_POST['year'];
		 $name=$_FILES['file']['name'];
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
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$query123=mysqli_query($conn,"INSERT INTO technical_events(tevent_name,tevent_day,tevent_month,tevent_year, tevent_pmplt)
		        VALUES ('$a1','$day','$month','$year','$location1')");
				
$query1234=mysqli_query($conn,"INSERT INTO recent_events_record(name, day,month,year, image,flag)
		        VALUES ('$a1','$day','$month','$year','$location1','$flag')");
							
							
$sql = "SELECT * FROM recent_events_record order  by id desc";
	$result = $conn->query($sql);

if ($result->num_rows >0) {
	// output data of each row
	   
      
    while($row = $result->fetch_assoc()) {	
	if(mysqli_affected_rows($conn) > 0){
		
		$sum= $row['flag'];
		$sum++;
		$id= $row['id'];
		$id2= $id-4;
	
			$sql = "DELETE  FROM recent_events_record WHERE id <= '$id2'	";
			$conn->query($sql);
	}
}
	
}
if($query123 && $query1234 && $imgflag)
{
	echo "<h1 style='color:white'>Image Uploaded Successfully</h1>";
	echo "<h1 style='color:white'>Record Added Successfully</h1>";
} else {
	echo "<h1 style='color:white'>Event NOT Added<br /></h1>";
	echo mysqli_error ($conn);
}
	 }	 
}
?>
</div>
</div>
</div>
</body>
</html>