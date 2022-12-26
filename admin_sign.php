<?php
$name = $designation = $email = $result = $password = $id = $retype = "";
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
    $user = $_POST['user'];
    $password = $_POST['password'];

    $sql = "SELECT `user_name`, `password` FROM `car_admin`";
    $result = mysqli_query($conn, $sql);
    if($conn->query($sql) === TRUE){
        echo "successs";
    }
}

?>

<?php include 'header.html' ?>
<div class="form-container">
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6 admin">
        <h5>Sign In</h5>
    <form action="" method="post">
        <label for="user">User Name</label>
        <input type="text" name="user"  required="1" placeholder="Enter your username" class="form-control"/>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter your password" required="1" class="form-control"/>
        <input type="submit" name="submit" class="btn btn-primary text-white" value="Submit"/>
    </form>
    <?php 
    if($result==TRUE){
        while($rows = mysqli_fetch_assoc($result)){
            if($rows['user_name']==$user&&$rows['password']==$password){?>
                  <a href="request.php" class="btn btn-primary text-white">Right! Go to Page</a>
           <?php }
        }
    }
    
    ?>
    </div>
    <div class="col-sm-3">
    <a href="index.php"> <i class="fa fa-arrow-left" aria-hidden="true"></i></a>
    </div>
</div>
</div>
<?php include 'footer.html'?>