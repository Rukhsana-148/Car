<?php
$name = $designation = $email = $type=$location=$car_name=$time="";
$serverName = "localhost";  
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($serverName, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])){
  $name = $_POST['name'];
  $designation = $_POST['designation'];
  $email = $_POST['email'];
  $type = $_POST['type'];
  $car_name = $_POST['car_name'];
  $location = $_POST['location'];
  $time = $_POST['time'];
}

$sql = "INSERT INTO `carrequest`(`Name`, `Email`, `Designation`, `Car Type`, `Car Name`, `Location`, `Time`) VALUES ('$name','$email','$designation','$type','$car_name','$location','$time')";
if ($conn->query($sql) === TRUE) {
  echo  '
  ';
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

?>



<?php include 'header.html'?>
<div class="form-container">
  <div class="row">
    <div class="col-sm-3">
    <a href="profile.php">  <i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
    </div>
    <div class="col-sm-6">
    <form action="" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter your name" class="form-control" required="1"/>
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Enter your email" class="form-control" required="1"/>
        <label for="designation">Designation</label>
        <input type="text" name="designation" placeholder="Enter your designation" class="form-control" required="1"/>
        <label for="type">Car Type</label>
      <select name="type">
        <option disable> select car type</option>
            <option>MicroBus</option>
            <option>Bus</option>
      </select>
<br>
<label for="car_name">Car Name</label>
      <select name="car_name">
        <option disable> select car name</option>
            <option>Noboganga</option>
            <option>Shapla</option>
            <option>Golap</option>
            <option>Shurjumukhi</option>
            <option>Chameli</option>
            <option>Rajonigandha</option>
      </select>
      <br>
      <label for="location">Location</label>
        <input type="text" name="location" placeholder="Enter your location" class="form-control" required="1"/>
        <label for="time">Time Span</label>
        <input type="text" name="time" placeholder="Enter your time span" class="form-control" required="1"/>
        <input type="submit" name="submit" class="btn btn-dark text-white"  value="Submit"/>
     </form>
    </div>
    <div class="col-sm-3">
  
    </div>
  </div>
   
</div>
<?php include 'footer.html'?>