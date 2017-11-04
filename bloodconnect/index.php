<?php
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Donate Blood - Save Lives</title>
     
    <link rel="stylesheet" href="style.css"type="text/css"/>
</head>
<body bgcolor="#FAF4F5">
   <div id="head">
   </div>
   <h1>Register as a Blood Donor</h1>
   <hr>
   <form action="index.php" method="post" id="donor">
       <fieldset>
           <legend><h2>Donor Infomation</h2></legend>
          <div id="for"><label for="blood">Your Blood Group *</label><br>
              <select  name="group" required id="blood">
                  <option value=""disabled selected hidden class="select">Select</option>
                  <option value="a+"class="select">A+</option>
                  <option value="a-"class="select">A-</option>
                  <option value="b+"class="select">B+</option>
                  <option value="b-"class="select">B-</option>
                  <option value="o+"class="select">O+</option>
                  <option value="o-"class="select">O-</option>
                  <option value="ab+"class="select">AB+</option>
                  <option value="ab-"class="select">AB-</option>                  
              </select>
           </div>
            <div id="ant">
               <label for="radio" id="gen">Gender *</label><br>
               <input type="radio" id="radio" value="male"checked name="gender"><label for="radio" class="gender">Male</label>
               <input type="radio" id="radio" value="female"name="gender"><label for="radio" class="gender">Female</label>
            </div>
           <div id="time">
             <label for="date" id="day">Date of Birth *</label>
              <input type="date" id="date" name="date" required>
            
               
               
           </div>
           <div id="weight">
               <label for="wait" id="wet">Weight(Kg) *</label><br>
               <input type="text" id="wait"placeholder="Weight" required name="weight" >
           </div>
           <div id="reason">
              <label for="donate" id="don">How often you donate blood *</label><br>
              <select name="donate" id="donate" required>
                <option value=""disabled selected hidden id="dot">Select</option>
                <option value="Yet to Donate" id="dot">Yet to donate</option>
                <option value="Regular Donor" id="dot">Regular donor</option>
                <option value="On need Basis" id="dot">On need basis</option>     
              </select>
               
           </div>
          
       </fieldset>
       
   
       <fieldset id="contact">
          <legend><h3>Contact Info</h3></legend>
        <div id="name">
           <label for="names" id="yourname">Name *</label><br>
            <input type="text"placeholder="  Name" required name="name" id="names">
        </div>
    <div id="dept">
      <label for="d" id="dep">Department *</label><br>
       <select name="deptt" id="d" required>
            <option value=""disabled selected hidden id="sel">Select</option>
            <option value="History" id="dept">History</option>
            <option value="Political Science" id="dept">Political Sccience</option>
            <option value="Psychology" id="dept">Psychology</option>
            <option value="Social Science" id="dept">Social Science</option>
            <option value="Sociology" id="dept">Sociology</option>
            <option value="Library and Info Science" id="dept">Library and Info Science</option>
            <option value="Commerce" id="dept">Commerce</option>
            <option value="Economics" id="dept">Economics</option>
            <option value="UBS" id="dept">UBS</option>
            <option value="Education" id="dept">Education</option>
            <option value="CS" id="dept">CS</option>
            <option value="CET" id="dept">CET</option>
            <option value="Electronics" id="dept">Electronics</option>
            <option value="Biotechnology" id="dept">Biotechnology</option>
            <option value="Human Genetics" id="dept">Human Genetics</option>
            <option value="Microbiology" id="dept">Microbiology</option>
            <option value="Environmental Sciences" id="dept">Environmental Sciences</option>
            <option value="Biochemistry" id="dept">Biochemistry</option>
            <option value="Pharmaceutical Sciences" id="dept">Pharmaceutical Sciences</option>
            <option value="Zoology" id="dept">Zoology</option>
            <option value="Guru Nanak Studies" id="dept">Guru Nanak Studies</option>
            <option value="English" id="dept">English</option>
            <option value="Foreign Languages" id="dept">Foreign Languages</option>
            <option value="Hindi" id="dept">Hindi</option>
            <option value="Punjabi" id="dept">Punjabi</option>
            <option value="Sanskrit" id="dept">Sanskrit</option>
            <option value="Urdu" id="dept">Urdu</option>
            <option value="Law" id="dept">Law</option>
            <option value="Physical Education" id="dept">Physical Education</option>
            <option value="Architecture" id="dept">Architecture</option>
            <option value="Planning" id="dept">Planning</option>
            <option value="Chemistry" id="dept">Chemistry</option>
            <option value="Food Science and Technology" id="dept">Food Science and Technology</option>
            <option value="Mathematics" id="dept">Mathematics</option>
            <option value="Physics" id="dept">Physics</option>
            <option value="Sports Medicine" id="dept">Sports Medicine</option>
            <option value="Music" id="dept">Music</option>
            <option value="Law" id="dept">Law</option>
            <option value="Law" id="dept">Law</option> 
       </select>
        
    </div>
          <div id="cont">
             <label for="contact" id="phone">Phone no. *</label><br>
              <input type="text" id="contac" name="phno" required placeholder="Mobile no.">
              
              
          </div>
       </fieldset>
        <input type="submit"id="submit" name="submit" value="submit">
    </form>
   
 <div style='text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;'><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website_donatblood&utm_content=footer_img"><img src="https://cloud.githubusercontent.com/assets/23024110/20663010/9968df22-b55e-11e6-941d-edbc894c2b78.png"  alt="www.000webhost.com"></a></div></body>
 <?php
	
	 if(isset($_POST['submit']))
	 {
		
		 $group=$_POST['group'];
		 $gender=$_POST['gender'];
		 $date=$_POST['date'];
		 $weight=$_POST['weight'];
		 $donate=$_POST['donate'];
		 $name=$_POST['name'];
		 $deptt=$_POST['deptt'];
		 $phno=$_POST['phno'];
	 
		 mysqli_query($conn,"INSERT INTO donors_record
		 (bloodgroup,gender,dob,weight,reason,name,deptt,phno)
		        VALUES
		('$group','$gender','$date','$weight','$donate','$name','$deptt','$phno')");
				
	if(mysqli_affected_rows($conn) > 0){
	echo "<h2 >Thank You For Registration</h2>";
} else {
	echo "Error Inserting Record<br />";
	echo mysqli_error ($conn);
}
	 }	 

?>	
 
 
</html>