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
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Technical Students Society</title>
<?php 

include 'common_bs_files.php';
?>
<style>
#img{
	border:5px solid white;
	border-radius:30%;
//	box-shadow:2px 6px 6px 2px white;
}
.hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  background-color: rgba(0,0,0,0.6);
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: translate(460px, -100px) rotate(180deg);
  -ms-transform: translate(460px, -100px) rotate(180deg);
  transform: translate(460px, -100px) rotate(180deg);
  -webkit-transition: all 0.2s 0.4s ease-in-out;
  transition: all 0.2s 0.4s ease-in-out;
}

.hovereffect img {
  display: block;
  position: relative;
  -webkit-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}

.hovereffect h2{
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  position: relative;
  font-size: 17px;
  padding: 10px;
  background: rgba(0, 0, 0, 0.6);
}

.hovereffect a.info {
  display: inline-block;
  text-decoration: none;
  padding: 7px 14px;
  text-transform: uppercase;
  color: #fff;
  border: 1px solid #fff;
  margin: 50px 0 0 0;
  background-color: transparent;
  -webkit-transform: translateY(-200px);
  -ms-transform: translateY(-200px);
  transform: translateY(-200px);
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}

.hovereffect a.info:hover {
  box-shadow: 0 0 5px #fff;
  border-radius:30%;
}

.hovereffect:hover .overlay {
  opacity: 1;
  border-radius:30%;
  filter: alpha(opacity=100);
  -webkit-transition-delay: 0s;
  transition-delay: 0s;
  -webkit-transform: translate(0px, 0px);
  -ms-transform: translate(0px, 0px);
  transform: translate(0px, 0px);
}

.hovereffect:hover  {
	border-radius:30%;
  -webkit-transform: translateY(0px);
  -ms-transform: translateY(0px);
  transform: translateY(0px);
  -webkit-transition-delay: 0.5s;
  transition-delay: 0.5s;
}

.hovereffect:hover a.info {
	border-radius:30%;
  -webkit-transform: translateY(0px);
  -ms-transform: translateY(0px);
  transform: translateY(0px);
  -webkit-transition-delay: 0.3s;
  transition-delay: 0.3s;
}
</style>
</head>

<body style="background-image:url(bk8.jpg)">

<?php
include 'header.php';
?>
 <div class="container">

<div class="row">
<br/>

<div class="col-sm-12">
<div class="col-sm-3">
    <div class="hovereffect">
        <img class="img-responsive" id="img" src="bk1.jpg" alt="">
        <div class="overlay">
            <h2 style="color:white;">Add Technical Events</h2>
            <a class="info" href="techInner.php">GO</a>
        </div>
    </div>
</div>
<div class="col-sm-3">
    <div class="hovereffect">
        <img class="img-responsive" id="img" src="bk5.jpg" alt="">
        <div class="overlay">
            <h2>Add Non-Technical Events</h2>
            <a class="info" href="nontechInner.php">GO</a>
        </div>
    </div>
</div>

<div class="col-sm-3">
    <div class="hovereffect">
        <img class="img-responsive" id="img" src="bk4.jpg" alt="">
        <div class="overlay">
		            <h2>Add Tech Fest Events</h2>
            <a class="info" href="techfest.php">GO</a>
        </div>
    </div>
</div>

<div class="col-sm-3">
    <div class="hovereffect">
        <img class="img-responsive" id="img" src="bk3.jpg" alt="">
        <div class="overlay">
		            <h2>Add Seminor And Flash Classes</h2>
            <a class="info" href="seminorInner.php">GO</a>
        </div>
    </div>
</div>
</div>
<div class="col-sm-12">
<br/>
<div class="col-sm-3">
    <div class="hovereffect">
        <img class="img-responsive" id="img" src="team.jpg" alt="">
        <div class="overlay">
		            <h2>Add Team</h2>
            <a class="info" href="addteam.php">GO</a>
        </div>
    </div>
</div>
<div class="col-sm-3">
    <div class="hovereffect">
        <img class="img-responsive" id="img" src="stm.jpg" alt="">
        <div class="overlay">
		            <h2>Search/Update Team</h2>
            <a class="info" href="demo_search.php">GO</a>
        </div>
    </div>
</div>
<div class="col-sm-3">
    <div class="hovereffect">
        <img class="img-responsive" id="img" src="dl1.png" alt="">
        <div class="overlay">
		            <h2>Delete Team</h2>
            <a class="info" href="delete_display.php">GO</a>
        </div>
    </div>
</div>
<div class="col-sm-3">
    <div class="hovereffect">
        <img class="img-responsive" id="img" src="dl.png" alt="">
        <div class="overlay">
		            <h2>Delete Event</h2>
            <a class="info" href="delete_event.php">GO</a>
        </div>
    </div>
</div>
</div>
</div>






</div>
</div>
</div>



</div></div>
</body>
</html>
<?php










}


?>
