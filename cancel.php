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

if(isset($_POST['cancel'])){
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $email = $_POST['email'];
    $type = $_POST['carType'];
    $car_name = $_POST['carname'];
    $location = $_POST['location'];
    $time = $_POST['time'];
    $date = $_POST['date'];
}


$delete = "DELETE FROM `carrequest` WHERE `Time` = '$time'";

  if ($conn->query($delete) === TRUE) {
    echo  'successfully canceled';
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }

 

?>
<?php include 'header.html' ?>

<?php include 'footer.html' ?>