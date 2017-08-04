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
<link rel="stylesheet" href="css/font-awesome.min.css">

</head>


<body style="background-image:url(bk8.jpg)">
<?php

 include 'header.php';?>
	<div class="row" style="padding-bottom:3%" ><br/><br/>
	<div class="col-sm-12">
		<div class="col-sm-1" ></div>
<div class="col-sm-10" >
<div class="row"  style="color:white; padding:1%;border:1px solid white;border-radius:2%">
<div class="col-sm-12">
			<form role="form" action="addteam.php" method="post" enctype="multipart/form-data"
			class="form"> 

						<center><h1>Add Team</h1></center>
							  <i class="fa fa-star" aria-hidden="true"style="color:#C9302C"  style=""></i>
denotes mandatory fields	
						<hr/>
						  <div class="col-sm-4">
						   <div class="form-group">
      <label for="id" class="td"> ID</label>
  <?php 

  $sql ='SELECT t.id
                         FROM team_record t 
                     ORDER BY t.id DESC 
                        LIMIT 1';
  	$result = $conn->query($sql);
    if ($result->num_rows ==1) {
			while($row = $result->fetch_assoc()) {  
			$p=0;
	  $p=$row["id"];
	  $p++;
	  $_SESSION['id'] = $p;

		   ?>
		   <input type="text" class="form-control" name="id" id="id" placeholder=" ID"
		   value="<?php echo $p;?>" onkeyup="checkname(); " readonly  required>
 <span  id="name_status" style="font-size:15px;color:black;" ></span>
  <?php
	   }
}
	?>
 </select>
</div>
</div>
	<div class="col-sm-4">
    <div class="form-group">
      <label for="id" class="td"> Name</label>
	  <i class="fa fa-star" aria-hidden="true" style="color:#C9302C"></i>
      <input type="text" class="form-control" name="name"  id="datepicker1" placeholder="Enter Name"
	  required>
    </div>
    </div>
		<div class="col-sm-4">

    <div class="form-group"> <label for="id" class="td">Post</label>
		  <i class="fa fa-star" aria-hidden="true" style="color:#C9302C"></i>
      <input type="text" class="form-control" name="post"  placeholder="Enter Post"
	 required>
    </div>
    </div>
    </div>
	<div class="col-sm-12">
	<div class="col-sm-4">	
	<div class="form-group"> <label for="id" class="td">Facebook link</label>
      <input type="text" class="form-control" name="fb"  placeholder="Enter fb link"
	  >
    </div>
    </div>

		<div class="col-sm-4">

	  <div class="form-group"> <label for="id" class="td">Instagram Link</label>
      <input type="text" class="form-control" name="insta" placeholder="Enter insta link">
    </div>
    </div>
		<div class="col-sm-4">

	  <div class="form-group"> <label for="id" class="td">LinkedIn Link</label>
      <input type="text" class="form-control" name="linkd" placeholder="Enter linkedin link"
	>
    </div>
	    </div>
	    </div>

	<div class="col-sm-12">
			<div class="col-sm-4">
				<div class="form-group"> <label for="id" class="td">YouTube Channel</label>
					<input type="text" class="form-control" name="youtube"  placeholder="Enter youtube">
				</div>
			</div>
 
	<div class="col-sm-4">

    <div class="form-group"> <label for="id" class="td">Level</label>
		  <i class="fa fa-star" aria-hidden="true" style="color:#C9302C"></i>
      <input type="text" class="form-control" name="level"  placeholder="Enter Level"
	 required>
    </div>
    </div>
			<div class="col-sm-4">

				<div class="form-group">
					<label for="file" class="td"> <label for="id" class="td">Event Pic</label>
				<i class="fa fa-star" aria-hidden="true" style="color:#C9302C"></i>
      <input type="file" class="form-control" name="file" id="file" placeholder="Enter pic"
	required>
    </div>
    </div>
	
    </div>
	<div class="col-sm-12">
	
    	<div class="col-sm-4">
    <button type="submit" value="submit" name="submit" style="margin-top:4%" class="btn btn-danger active">INSERT RECORD</button>
			    		
			    	<br/><br/>
			    		
			    		</form>	
						</div>
						<div class="col-sm-8" >
					
	
 <?php
	
	 if(isset($_POST['submit']))
	 {
		 $fb='1';
		 $insta='1';
		 $linkd='1';
		 $youtube='1';
		 $id=$_POST['id'];
		 $name1=$_POST['name'];
		 $post=$_POST['post'];
		 $fb=$_POST['fb'];
		 $insta=$_POST['insta'];
		 $linkd=$_POST['linkd'];
		 $youtube=$_POST['youtube'];
		 $level=$_POST['level'];
	
		 $name=$_FILES['file']['name'];
		 $c="team";
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
			?>
			<h2 style="color:white;">Image uploaded succesfully</h2>
			<?php
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
mysqli_query($conn,"INSERT INTO team_record(id,name,post,image,fb_link,insta_link,linkedin,youtube,level)
		        VALUES ('$id','$name1','$post','$location1','$fb','$insta','$linkd','$youtube','$level')");
				
	if(mysqli_affected_rows($conn) > 0){
	echo "<h2 style='color:white;'>Record Added Succesfully</h2>";
} else {
	echo "Event NOT Added<br />";
	echo mysqli_error ($conn);
}
	 }	 
}
?>	
						</div>
						</div>
						</div>	</div>
						</div>
</div>
</div>
</div>
</body>
</html>