<?php
    echo"<pre>";    
    var_dump($_POST);
    echo "</pre>";
    echo"<br></br>";

$full_name = $_POST['name'];
$gender = $_POST['gender'];
$country = $_POST['Country'];
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ikaw bahala";
$conn = new mysqli($servername, $username, $password , $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

 <?php
    $sql = "INSERT INTO student_record (id, FULLNAME, GENDER,COUNTRY)
    VALUES(Null, '$full_name','$gender','$country')";

if($conn->query($sql)=== TRUE){
    echo "New record created succesfully";
} else{
    echo "Error:". $sql . "<br>" . $conn->error;
}
?>