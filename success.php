<?php
$name = $designation = $email = $contact = $password = $id = $retype = "";
$serverName = "localhost";  
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($serverName, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){
    $id = $_POST['id'];
  $name = $_POST['name'];
   $designation = $_POST['designation'];
   $email = $_POST['email'];
   $contact  = $_POST['contact'];
   $password = $_POST['password'];
   $retype = $_POST['retype'];
}

if($id!=0&&$name!=""&&$designation!=""&&$email!=""&&$contact!=0&&$password!=""){
$sql = "INSERT INTO `user`(`ID`, `Name`, `Designation`, `Email`, `Contact`, `Password`) VALUES ('$id','$name','$designation','$email','$contact','$password')";
if ($conn->query($sql) === TRUE) {
  echo  'successfully inserted';
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?>



<?php include 'header.html'?>
<div class="form-container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
<p>Hi <?php echo $name ;?></p>

</div>
<div class="col-sm-3"></div>
</div>
</div>
<?php include 'footer.html'?>