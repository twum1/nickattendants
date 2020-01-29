

<?php

session_start();


?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="loginpage.css">
</head>
<?php
$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>

<body> 
<header><h1>Service Station Attendant Details</h1></header>
<div class="container">
    
   
<form action="connect.php" method="post">

<div class="form">
<p style="text-align:conter;"> Basic Data/ Personal Details</p>
 Sure Name: <br>   <input type="text" name="surname" > <br>  <br>
first Name:<br><input type="text" name="firstname"> <br> <br>
Other Name:<br><input  type="text" name="othername"> <br> <br>
Nationality:<br><input type="text" name="nationality"> <br>   <br>
Marital status:<br><input type="text" name="maritalstatuse"> <br>   <br>
Natinality:<br><input type="text" name="nationality"> <br>   <br>
<div id="contacts">
Phone number:<br><input type="text" name="phonenumber"> <br>   <br>
Email :<br><input type="email" name="email"> <br>   <br>
National Id :<br><input type="text" name="nid"> <br>   <br>
SSNIT Number :<br><input type="text" name="ssnit"> <br>   <br>

</div>
<br>
<div id="spouse">
<h3>Names of children</h3>
1:<input type="text" name="child1">                <input type="date" name="date1"> <br>   <br>
2:<input type="text" name="child2">                 <input type="date" name="date1"><br>   <br>
3:<input type="text" name="child3">                 <input type="date" name="date1"> <br>   <br>
</div>
<br>

<br>
<div id="emcontact">
<p> EMERGENCY CONTACT DETAILS</p>

</div>



<input type="submit"  name="create your account">
</form>
</div>


<br>

<br>






  <b><a href="#">conditions of use:</a></b>   <br>     <b> <a href="#">Privacy notice:<a> </b><br>  <b>Help:</b>



</body>
</html>
