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
      $id = $_GET['id'];


?>


</head>	
<script src="jquery.min.js"></script>

<body style="background-image:url(assets/bk88.png)">

<?php

 include 'header.php'?>
  <br/>
	  <form role="form" action="search_page1.php" method="post" enctype="multipart/form-data">
  <div class="container" style="box-shadow:3px 4px 5px 6px white;border-radius:3%">
  <div class="row"><br/></p>
  <div class="col-sm-2">
  <?php $sql ="SELECT *
                         FROM team_record t 
                     WHERE t.id ='$id'  
                        ";
  	$result = $conn->query($sql);
    if ($result->num_rows ==1) {
			while($row = $result->fetch_assoc()) {  
	  $p=$row["id"];
	  $q=$row["name"];
	  $r=$row["post"];
	  $s=$row["fb_link"];
	  $image=$row["image"];
	  	  $_SESSION['id'] = $p;

		   ?>
		   <input type="text" class="form-control"name="id" id="" placeholder=" ID"
		   value="<?php echo $p;?>" onkeyup="checkname(); " readonly  required>
 <span  id="name_status" style="font-size:15px;color:black;" ></span><br/></p>


</div>
<div class="col-sm-2">
      	<input type="text" class="form-control" 
		name="name" placeholder="Enter Name"value="<?php echo $q?>" id="td2" ><br/></p>
</div>
<div class="col-sm-2">
         	<input type="text" class="form-control" name="post" value="<?php echo $r ;?>"  placeholder="post"  ><br/></p>
 
</div>
<div class="col-sm-2">
         	<input type="text" class="form-control" name="fb"   value="<?php echo $s ?>" placeholder="fb link"><br/></p>

</div>   
<div class="col-sm-2">
         	<input type="text" class="form-control" name="insta" value="<?php echo $row['insta_link'];?>" placeholder="insta link" id="td2"><br/></p>

			</div>
<div class="col-sm-2">
         	<input type="text" class="form-control" name="link" value="<?php echo $row['linkedin'];?>" placeholder="linkedin link" id="td2" ><br/></p>
 
</div>

<div class="col-sm-2">
         	<input type="text" class="form-control" name="youtube" placeholder="youtube link" id="td2" value="<?php echo $row['youtube']; ?>" ><br/></p>

</div> 
<div class="col-sm-2">
         	<input type="file" class="form-control" name="file" value="0"  ><br/></p>

</div> 
<div class="col-sm-2">
         	<input type="text" class="form-control" name="level" placeholder="Level" id="td2" value="<?php echo $row['level']; ?>" ><br/></p>

</div>   

	<div class="col-sm-2">

    
<?php
			}
	}
	?>
 <input  type="submit" class="btn btn-danger " id="submit" name="submit" value="UPDATE RECORD"/><br/><br/>
</td>
</tr>
	 	</form>
	</div>
  </div>
   </table>
    
</body>
</html>
		
<script> /*
function add() {
		var extra = document.getElementById('extra').value;	
		var total = document.getElementById('total').value;
		var result = document.getElementById('total');	
		var myResult = extra + total;
		result.value = myResult;
      
		
	}*/
</script>
	
</div></div> 
	<?php
}
?>