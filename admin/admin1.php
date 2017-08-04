<?php
session_start();

$servername = "localhost";
$username = "id2156308_tssgndu";
$password = "tssgndu";
$dbname = "id2156308_tss";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
<html>
	<head>
		<title>Technical Students Society</title>
		
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7">
<link rel="stylesheet" href="css/bootstrap.css">

<!-- Optional theme -->
<link rel="stylesheet" href="admin.css">
<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js">
</script>
<style>
body{
 
  background-size: cover;
  font-family:'HelveticaNeue','Arial', sans-serif;

}
a{color:#58bff6;text-decoration: none;}
a:hover{color:#aaa; }
.pull-right{float: right;}
.pull-left{float: left;}
.clear-fix{clear:both;}
div.logo{text-align: center; margin: 20px 20px 30px 20px; fill: #566375;}
div.logo svg{
	width:180px;
	height:100px;
}
.logo-active{fill: #44aacc !important;}
#formWrapper{
	background: rgba(0,0,0,.2); 
	width:100%; 
	height:100%; 
	margin-top:25%;
	transition:all .5s ease;}
.darken-bg{background: rgba(0,0,0,.5) !important; transition:all .5s ease;}

div#form{
	width:360px;
	height:320px;
	height:auto;
	background-color: #fff;
	margin:;
	border-radius: 10px;
	padding:20px;
	left:1%;
	margin-top:25%;
}
div.form-item{position: relative; display: block; margin-bottom: 20px;}
 input{transition: all .2s ease;}
 input.form-style{
	color:#8a8a8a;
	display: block;
	width: 90%;
	height: 44px;
	padding: 5px 5%;
	border:1px solid #ccc;
	-moz-border-radius: 27px;
	-webkit-border-radius: 27px;
	border-radius: 27px;
	-moz-background-clip: padding;
	-webkit-background-clip: padding-box;
	background-clip: padding-box;
	background-color: #fff;
	font-family:'HelveticaNeue','Arial', sans-serif;
	font-size: 105%;
	letter-spacing: .8px;
}
div.form-item .form-style:focus{outline: none; border:1px solid #58bff6; color:#58bff6; }
div.form-item p.formLabel {
	position: absolute;
	top:2px;
	transition:all .4s ease;
	color:#bbb;}
.formTop{top:22px !important; left:2px; background-color: #fff; padding:0 5px; font-size: 14px; color:#58bff6 !important;}
.formStatus{color:#8a8a8a !important;}
input[type="submit"].login{
	float:right;
	width: 112px;
	height: 37px;
	-moz-border-radius: 19px;
	-webkit-border-radius: 19px;
	border-radius: 19px;
	-moz-background-clip: padding;
	-webkit-background-clip: padding-box;
	background-clip: padding-box;
	background-color: #55b1df;
	border:1px solid #55b1df;
	border:none;
	color: #fff;
	font-weight: bold;
}
input[type="submit"].login:hover{background-color: #fff; border:1px solid #55b1df; color:#55b1df; cursor:pointer;}
input[type="submit"].login:focus{outline: none;}


</style>
<!--script>
$(document).ready(function(){
	var formInputs = $('input[type="username"],input[type="password"]');
	formInputs.focus(function() {
       $(this).parent().children('p.formLabel').addClass('formTop');
       $('div#formWrapper').addClass('darken-bg');
       $('div.logo').addClass('logo-active');
	});
	formInputs.focusout(function() {
		if ($.trim($(this).val()).length == 0){
		$(this).parent().children('p.formLabel').removeClass('formTop');
		}
		$('div#formWrapper').removeClass('darken-bg');
		$('div.logo').removeClass('logo-active');
	});
	$('p.formLabel').click(function(){
		 $(this).parent().children('.form-style').focus();
	});
});
</script-->
	</head>

<body style="background-image:url(images.jpg)">
<div class="container">
<div class="row">
<div class="col-sm-4" style="box-shadow: 10px 10px 5px #e5e5e5;padding-bottom:3%;border-radius:3%">
<div >
<div id="logo"></div>

<div  style="opacity:0.8">
		<div class="form-item"  style="font-size:30px;color:#8a8a8a">
	<br/><br/>	<center> Admin Panel
 </center>
		</div>
		<hr/><br/>
		<form action="admin1.php" method="post">
		<div class="form-item">
			<input type="text" name="p1" id="username" placeholder="Username " class="form-style" />
		</div>
		<div class="form-item">
			<input type="password" name="p2" id="password" placeholder="Password "class="form-style" /> <br/>
			<!-- <div class="pw-view"><i class="fa fa-eye"></i></div> -->
		</div>
		<div class="form-item">
		<input type="submit" name="submit" class="login pull-right" value="Log In">
		<div class="clear-fix"></div>
		</div>
		</form>

		
		

		
		
		
		
		
</div>
</div>
</div>
</div>
		
			

	</body>
</html>



<?php
if(isset($_POST['submit']))
{
	 $p=$_POST['p1'];
	 $q=$_POST['p2'];

$sql = "SELECT * FROM admin_db where username='$p' and password='$q' ";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
	$row = $result->fetch_assoc();
	$a= $row['username'];
    //echo $a;
	$b=$row['password'];
	//echo $b;
	if($a==$p && $b==$q)
	{
	$_SESSION['username']=$_POST['p1'];
	$_SESSION['password']=$_POST['p2'];
		die("<script>location.href = 'admininner.php'</script>");
		echo "success";
	}
	else
	{
		die("<script>location.href = 'admin1.php'</script>");
	}
}
}