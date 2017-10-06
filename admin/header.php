<?php

$u=$_SESSION["username"];
$p=$_SESSION["password"];


?>
<!DOCTYPE html>
<html>
<head>
<title>Technical Students Society</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/header.css"/>
   <style>
   #a1{
	   color:white;
	   
                
   }
   .a2{
	   color:white;
	   font-size:20px;
	   
   }
  
   .a2:hover{
	   font-size:25px;
	   color:white;
   }
     #picker { margin-top:1px;float:left;width: 20px; height: 60px }
                  #slide { float:left;width: 20px; height: 60px }
   </style>
      
              
</head>
<body id="body">
<?php
?>
  <div class="container-fluid">
  <div class="row" id="back"  style="background-image:url(assets/bk88.png);">
  <div class="col-sm-1">

       <a href="admininner.php" class="a2"><img src="assets/logo.png" style="margin-top:10%;border-radius:10%;"></a>

   
  </div>
  <div class="col-sm-3" >
  
  
     <!--div id="picker"></div>
                <div id="slide"></div--></div>
  <div class="col-sm-6"  >
  <div class="col-sm-1">  </div>
   <div class="col-sm-8" >
   <div style="color:white;font-size:32px;padding-top:2%;padding-bottom:4%;" class="n">Technical Students Society</div>
   </div>
     <div class="col-sm-7">  </div>

  </div>
  <div class="col-sm-2">
  <div class="col-sm-6"></div>
  <div class="col-sm-6" >
     <a href="logout2.php"><img src="assets/lg.png" style="margin-top:10%;border-radius:10%;"></a>
</div>
</div>
</div>
  </div>
  </div>
   <div class="row" id="left" style="padding-bottom:3%;">
   <div class="col-sm-1"></div>
   <div class="col-sm-10">
    <ul>
   
    <li class="dropdown" >
 <a class="dropdown-toggle" id="a1" data-toggle="dropdown" href="#">Add Events<span class="caret"></span></a>
   <ul class="dropdown-menu">
     <li><a href="techInner.php">Technical Events</a></li>
     <li><a href="nontechInner.php">Non-Technical Events</a></li>
     <li><a href="seminorInner.php">Seminor And Flash Classes</a></li>
	 <li><a href="techfest.php">Tech Fest Events</a></li>
   
   </ul>
  </li> 
   <li class="dropdown"><a class="dropdown-toggle" id="a1" data-toggle="dropdown" href="#">Team
   <span class="caret"></span></a>
        <ul class="dropdown-menu">
		
     <li><a href="addteam.php">Add Team Member</a></li>
     <li><a href="demo_search.php">Search/Update Team Member</a></li>
     <li><a href="delete_display.php">Delete Team Member</a></li>
	 </ul>
</li>
   <li class="dropdown"><a class="dropdown-toggle" id="a1" data-toggle="dropdown" href="#">Delete/Update Event
   <span class="caret"></span></a>
        <ul class="dropdown-menu">
		
     <li><a href="delete_event.php">Delete/Update Technical Event</a></li>
     <li><a href="delete_ntevent.php">Delete/Update Non-Technical Event</a></li>
     <li><a href="delete_sevent.php">Delete/Update Seminor Event</a></li>
     <li><a href="delete_tfevent.php">Delete/Update Tech Fest Event</a></li>
	 </ul>
</li>
  


   </ul>
   </ul>
   
      

   </div>
   <div class="col-sm-1"></div>
   
  </div>
  </div>
  </div>

</body>
</html>

  