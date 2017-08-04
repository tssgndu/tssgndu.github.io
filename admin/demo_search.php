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
<!DOCTYPE HTML>
<html>
<head>
<?php include 'common_bs_files.php';include 'connection.php'; 
   

?>
<style>
tr:hover{
	color:black;
	
}

</style>
</head>


<body style="background-image:url(bk8.jpg)">
 <?php
 include 'header.php'?><br/>
  <div class="container" id="brdr"  style="border:1px solid white;border-radius:2%">
  <div class="row">
  <div class="col-sm-12"  >
   </div>
   </div><br/>
	   <div class="row">
			   <div class="col-sm-12"  >
		   
	<?php	 include 'connection2.php';

//LET'S INITIATE CONNECT TO DB
$query3=mysqli_query($conn, "select * from team_record where id!=0  group by id ");
$query4=mysqli_fetch_array($query3);
echo mysqli_error($conn);
if($query4){
$query1=mysqli_query($conn, "select * from team_record where id!=0 group by id ");
echo "<table class='table table-hover' style='font-size:18px;color:white;background-image:url(bk88.png);border-radius:2%'><tr style='font-size:20px;color:white;font-family:times new roman' class='a'><th> ID</th><th> Name</th><th> Post</th><th>FB Link</th><th>Insta Link<th>Linkedin</th><th>Youtube</th><th>Level</th></tr>";
while($query2=mysqli_fetch_array($query1))
{
echo "<tr><td><a href='search_page.php?id=".$query2['id']."' target='_blank' >".$query2['id']."</a></td>";
echo "<td>".$query2['name']."</td>";
echo "<td>".$query2['post']."</td>";
echo "<td>".$query2['fb_link']."</td>";
echo "<td>".$query2['insta_link']."</td>";
echo "<td>".$query2['linkedin']."</td>";
echo "<td>".$query2['youtube']."</td>";
echo "<td>".$query2['level']."</td></tr>";
}

}
else
{
?>  <script>
  	document.write("<h1 style='color:white;font-size:20px;'>No Such Record Exists.. Sorry :(</h1>");
</script>
<?php
}

?>
		   
			   </div>
		</div>
    </div>
</body>
</html>
<?php
}

?>