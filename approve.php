<?php
$name = $designation = $email = $contact = $password = $id = $type =  $date= $location = $car_name = "";
$serverName = "localhost";  
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($serverName, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['approve'])){
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $email = $_POST['email'];
    $type = $_POST['carType'];
    $car_name = $_POST['carname'];
    $location = $_POST['location'];
    $time = $_POST['time'];
    $date = $_POST['date'];
}
if($name!=""&&$designation!=""&&$email!=""&&$email!=""&&$type!=""&&$car_name!=""&&$location!=""&&$time!=""&&date!=""){



$sql = "INSERT INTO `approvedcar`(`Name`, `Email`, `Designation`, `Car Type`, `Car Name`, `Location`, `Time Span`, `Date`) VALUES ('$name','$email','$designation','$type','$car_name','$location','$time','$date')";
$delete = "DELETE FROM `carrequest` WHERE `Email` = '$email'";
if ($conn->query($sql) === TRUE) {
    echo  'successfully inserted';
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }

  if ($conn->query($delete) === TRUE) {
    echo  'successfully deleted';
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
 

?>
<?php include 'header.html' ?>

<?php include 'footer.html' ?>