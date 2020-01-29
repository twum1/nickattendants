<?php
session_start();

$servername = "ftp.gear.host";
$username = "nickattendants\$nickattendants";
$password ="jcZWeKBo8jq5foHa2JjYu6hg7QaetWPb5ijaqdpcinBc7p7jmeg3XpmSnik4";
$dbname = "mydb";



$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$passw=$_POST["passw"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql = "INSERT INTO customers (firstname,lastname,email,passw)
VALUES ('$firstname', '$lastname','$email','$passw')";



 if ($conn->query($sql) === TRUE) {
   echo "<script language=javascript>document.location.href='output.php'</script>";

  
}
else {
    echo "Error inserting data: " . $conn->error;
}



mysqli_close($conn);

?>
