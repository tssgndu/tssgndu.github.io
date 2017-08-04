<?php /*
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

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tss";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<html lang="en">
<head>
<?php
include 'common_bs_files.php';
?>

</head>


<body style="background-image:url(bk8.jpg)">
<?php

 include 'header.php';?>
	<div class="row" ><br/><br/>
	<div class="col-sm-12">
		<div class="col-sm-1" ></div>
<div class="col-sm-10" style="padding:2%;border:1px solid white;border-radius:20px;background-image:url(bk88.png)">
			
	<table class="table" style="color:white;">
	<tr>
	<th>Sr. No.</th>
	<th>Name</th>
	<th>Post</th>
	<th>fb Link</th>
	<th>Insta Link</th>
	<th>youtube </th>
	<th>linkdin </th>
	</tr>
	<tr>
	<td >1</td>
	<td ><a href="demo_name.php" target="_blank">Lovepreet</a> </td>
	<td>Technical Supremo</td>
	<td >available</td>
	<td >available</td>
	<td>available</td>
	<td >available</td>
	</tr>
	<tr>
	<td>1</td>
	<td><a href="#">Lovepreet</a> </td>
	<td>Technical Supremo</td>
<td >available</td>
	<td >available</td>
	<td>available</td>
	<td >available</td>
	</tr>
	<tr>
	<td>1</td>
	<td><a href="#">Lovepreet</a> </td>
	<td>Technical Supremo</td>
<td >available</td>
	<td >not available</td>
	<td>available</td>
	<td >available</td>
	</tr>
	<tr>
	<td>1</td>
	<td><a href="#">Lovepreet</a> </td>
	<td>Technical Supremo</td>
	<td >available</td>
	<td >available</td>
	<td>not available</td>
	<td >available</td>
	</tr>
	<tr>
	<td>1</td>
	<td><a href="#">Lovepreet</a> </td>
	<td>Technical Supremo</td>
	<td >available</td>
	<td >not available</td>
	<td>not available</td>
	<td >available</td>
	</tr>
	</table>
</div>
</div>
</div>
</body>
</html>
<?php
*/

?>


<?php
session_start();

$u=$_SESSION["username"];
$p=$_SESSION["password"];
//echo $a;
//echo $b;

if($u==null || $p==null)
{
	 die("<script>location.href = 'login.php'</script>");
}
else
{


?>
<!DOCTYPE HTML>
<html>
<head>
<?php include 'common_bs_files.php';include 'connection.php'; 
    

?>
</head>

<?php
$sql = "SELECT * FROM bodycolor WHERE id='1'";
    $result = $conn->query($sql);
     if ($result->num_rows > 0) {

	 // output data of each row
				while($row = $result->fetch_assoc()) {
	?>
<body style="background-image:url(bk88.png)">
<?php include 'header.php'?>
  <div class="container" id="brdr"  style="border:1px solid white;">
  <div class="row">
  <div class="col-sm-12"  >
   </div>
   </div><br/>
	   <div class="row">
			   <div class="col-sm-12"  >
		   
	<?php	 include 'connection2.php';

//LET'S INITIATE CONNECT TO DB
$query3=mysqli_query($conn, "select * from customer_record where customer_name='$name' ||  customer_address='$address' || customer_id='$id' group by customer_id");
$query4=mysqli_fetch_array($query3);
if($query4){
$query1=mysqli_query($conn, "select * from customer_record where customer_name='$name' || customer_address='$address' || customer_id='$id' group by customer_id");
echo "<table class='table table-hover' style='background-color:white'><tr><th>Customer ID</th><th>Customer Name</th><th>Customer Address</th><th>Customer Phno</th><th>Customer Date<th>Extra</th><th>Total</th>";
while($query2=mysqli_fetch_array($query1))
{
echo "<tr><td><a href='search_size_page.php?customer_id=".$query2['customer_id']."' target='_blank' >".$query2['customer_id']."</a></td>";
echo "<td>".$query2['customer_name']."</td>";
echo "<td>".$query2['customer_address']."</td>";
echo "<td>".$query2['customer_phno']."</td>";
echo "<td>".$query2['customer_date']."</td>";
echo "<td>".$query2['extra']."</td>";
echo "<td>".$query2['total']."</td>";
}

}
else
{
?>  <script>
  	document.write("<h1 style='color:#000033;font-size:20px;'>Sorry!!!!! No Such Record Exists</h1>");
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