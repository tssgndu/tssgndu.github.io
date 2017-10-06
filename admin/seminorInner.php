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


<body style="background-image:url(assets/bk8.jpg)">
<?php

 include 'header.php';?>

	<div class="row" ><br/><br/>
	<div class="col-sm-12">
		<div class="col-sm-1" ></div>
<div class="col-sm-10" >	
	<form role="form" action="seminorInner.php" method="post" enctype="multipart/form-data"
			  style="color:white; padding:2%;border:1px solid white;border-radius:1%">
	
	<h1>Add Seminar & Flash Class Event</h1>
    
	<div class="form-group">
		  <label for="id" class="td">Event Name</label>
		  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name"
		  style="width:300px;"  required>
    </div>
	
    <div class="form-group">
		<label for="id" class="td">Event Date</label>
			<input type="text"  class="form-control" name="day" id="day"  placeholder="Enter Day"
			style="width:300px;" required > <br/>
			 		<?php $sql ="SELECT month from indextable where id!='13' order by id ASC ";
  	$result = $conn->query($sql);
    if ($result->num_rows >0) {
		   ?>
		   <select id="month" class="form-control" name="month" style="width:300px;color:gray;" placeholder="Select month">
		           <option>----Select month---</option>
	<?php while($row = $result->fetch_assoc()) {  ?>
			<option><?php echo $row["month"];?></option>
    <?php
	   }
	   }
	?>
	</select> <br/>
			<input  type="text"  class="form-control" name="year" id="year"  placeholder="Enter Year"
			style="width:300px;"  required> 
	</div>	
	
	<div class="form-group">
      <label for="file" class="td">Pic For Event</label>
      <input type="file" class="form-control" name="file" id="file" placeholder="Enter pic"
	  style="width:300px;" required>
    </div>
    
    <button type="submit" value="submit" name="submit" class="btn btn-danger active">INSERT RECORD</button>
			    		
			    		
			    		
			    		</form>	
	
 <?php
	
	 if(isset($_POST['submit']))
	 {
			 $a1=$_POST['name'];
			 $day=$_POST['day'];
			 $month=$_POST['month'];
			 $year=$_POST['year'];
			 $flag='1';
			 $imgflag='0';
			 $newindex='0';
			 $name=$_FILES['file']['name'];
			 $c="seminor_events";
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
				$location=$c."/";
				if(move_uploaded_file($tmp_name,$location.$name))
			{
				$imgflag=1;
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
	$sql ="SELECT * from indextable where month='$month'";
  	$result = $conn->query($sql);
    if ($result->num_rows >0)
		{
		   	while($row = $result->fetch_assoc()) 
			{ 
					$newindex= $row["id"];
					
					$query123= mysqli_query($conn,"INSERT INTO events_record
					(name, day,month,year, image,flag,newindex,semflag)
						VALUES 
					('$a1','$day','$month','$year','$location1','$flag','$newindex','category-3')");
									
					
					if($query123 && $imgflag)
					{
						echo "<h1 style='color:white'>Image Uploaded Successfully</h1>";
						echo "<h1 style='color:white'>Record Added Successfully</h1>";
					} else {
						echo "<h1 style='color:white'>Event NOT Added<br /></h1>";
						echo mysqli_error ($conn);
					}
			}
		}				
	}	 
}
?>
</div>
</div>
</div>
</body>
</html>