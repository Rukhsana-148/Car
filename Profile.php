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
    $email = $_POST['email'];
    $password = $_POST['password'];
}

    $sql = "SELECT `ID`, `Name`, `Designation`, `Email`, `Contact`, `Password` FROM `user`";
    $req = "SELECT `Name`, `Email`, `Designation`, `Car Type`, `Car Name`, `Location`, `Time` FROM `carrequest`";
    $approve = "SELECT `Name`, `Email`, `Designation`, `Car Type`, `Car Name`, `Location`, `Time Span`, `Date` FROM `approvedcar`";
    $result = mysqli_query($conn, $sql);
    $req_result = mysqli_query($conn, $req);
    $apv_result = mysqli_query($conn, $approve);
    if($conn->query($sql) === TRUE){
        echo "successs";
    }
    if($conn->query($req) === TRUE){
        echo "successs";
    }

?>

<?php include 'header.html' ?>
<div class="form-contain">
    <div class="row">
        <div class="col-sm-3 select">
            <nav>
                <ul>
                    <li><a href="#profile"> <i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                    <li><a href="#car_list"> <i class="fa fa-car" aria-hidden="true"></i> Car List</a> </li>
                    <li><a href="#request"> Own Request</a></li>
                </ul>

            </nav>
        </div>
        <div class="col-sm-6">
        <a href="index.php"> <i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
        <?php 

if($result==TRUE){
while($rows = mysqli_fetch_assoc($result)){
if($rows['Email']==$email && $rows['Password']==$password){
?>
<div id="profile">
 <h5>About Me</h5>
<nav>
    <ul>
        <li><i class="fa fa-user" aria-hidden="true"></i></li>
        <li><?php echo $rows['ID'];?></li>
        <li> <?php echo $rows['Name'];?></li>
        <li> <?php echo $rows['Designation'];?></li>
        <li> <?php echo $rows['Email'];?></li>
        <li> <?php echo $rows['Contact'];?></li>
        <li> <?php echo $rows['Password'];?></li>
        
    </ul>
</nav>



<?php
}
}
}?>
</div>
<div id="car_list">
    <h5>Car List</h5>
    <table class="table table-bordered table-striped table-dark text-white">
    <thead>
        <tr>
        <th>Car Type</th>
        <th>Car Name</th>
        <th>Numbers_Of_Seat</th>
        <th>Request</th>
        <tr>
</thead>
<tbody>
    <tr>
        <td>MicroBus</td>
        <td>Noboganga</td>
        <td>40</td>
        <td><a href="form.php"><div class="btn btn-primary text-white">Request</div></a></td>
    </tr>
    <tr>
        <td>MicroBus</td>
        <td>Noboganga</td>
        <td>40</td>
        <td><a href="form.php"><div class="btn btn-primary text-white">Request </div></a></td>
    </tr>
    <tr>
        <td>MicroBus</td>
        <td>Sheuli</td>
        <td>40</td>
        <td><a href="form.php"><div class="btn btn-primary text-white">Request</div></a></td>
    </tr>
    <tr>
        <td>MicroBus</td>
        <td>Shapla</td>
        <td>40</td>
        <td><a href="form.php"><div class="btn btn-primary text-white">Request </div></a></td>
    </tr>
    <tr>
        <td>Bus</td>
        <td>Surjumukhi</td>
        <td>55</td>
        <td><a href="form.php"><div class="btn btn-primary text-white">Request</div></a></td>
    </tr>
    <tr>
        <td>Bus</td>
        <td>Golap</td>
        <td>55</td>
        <td><a href="form.php"><div class="btn btn-primary text-white">Request </div></a></td>
    </tr>
</tbody>
</table>

</div>
<div class="request" id="request">
            <?php
            if($req_result==TRUE){
                while($rows = mysqli_fetch_assoc($req_result)){
                   if($rows['Email'] == $email){?>
                      <h5>My Request</h5>
                       <table class="table table-bordered table-striped table-dark text-white">
                       <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Designation</th>
                            <th>Car Type</th>
                            <th>Car Name</th>
                            <th>Location</th>
                            <th>Time Span</th>
                            <th>Action</th>
                        </tr>
                   </thead>
                   <tbody>
                    <tr>
                        <td data-label="Name"><?php echo $rows['Name']?></td>
                        <td data-label="Email"><?php echo $rows['Email']?></td>
                        <td data-label="Designation"><?php echo $rows['Designation']?></td>
                        <td data-label="Car Type"><?php echo $rows['Car Type']?></td>
                        <td data-label="Car Name"><?php echo $rows['Car Name']?></td>
                        <td data-label="Location"><?php echo $rows['Location']?></td>
                        <td data-label="Time"><?php echo $rows['Time']?></td>
                        <td data-label="Action"><form action="cancel.php" method="post">
                            <input type="hidden" name="name" value="<?php echo $rows['Name'] ?>"/>
                            <input type="hidden" name="email" value="<?php echo $rows['Email'] ?>"/>
                            <input type="hidden" name="designation" value="<?php echo $rows['Designation'] ?>"/>
                            <input type="hidden" name="carType" value="<?php echo $rows['Car Type'] ?>"/>
                            <input type="hidden" name="carname" value="<?php echo $rows['Car Name'] ?>"/>
                            <input type="hidden" name="location" value="<?php echo $rows['Location'] ?>"/>
                            <input type="hidden" name="time" value="<?php echo $rows['Time'] ?>"/>
                            <input type="hidden" id="e" name="date" class="form-control" required="1" placeholder="+880: Enter your phone number">

                            <input type="submit" name="cancel" value="Cancel" class="btn btn-danger text-white"/>

                          </form></td>
                    </tr>
                   </tbody>
                    </table>
                 <?php  
                     
                }
            }
        }
            ?>
        </div>
        <div class="approve" id="request">
            <?php
            if($apv_result==TRUE){
                while($rows = mysqli_fetch_assoc($apv_result)){
                   if($rows['Email'] == $email){?>
            <h5>Approvement</h5>
                       <table class="table table-bordered table-striped table-dark text-white">
                       <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Designation</th>
                            <th>Car Type</th>
                            <th>Car Name</th>
                            <th>Location</th>
                            <th>Time Span</th>
                            <th>Approved date</th>
                        </tr>
                   </thead>
                   <tbody>
                    <tr>
                        <td data-label="Name"><?php echo $rows['Name']?></td>
                        <td data-label="Email"><?php echo $rows['Email']?></td>
                        <td data-label="Designation"><?php echo $rows['Designation']?></td>
                        <td data-label="Car Type"><?php echo $rows['Car Type']?></td>
                        <td data-label="Car name"><?php echo $rows['Car Name']?></td>
                        <td data-label="Location"><?php echo $rows['Location']?></td>
                        <td data-label="Date"><?php echo $rows['Date']?></td>
                        <td data-label="Time Span"><?php echo $rows['Time Span']?></td>
                        
                    </tr>
                   </tbody>
                    </table>
                 <?php  
                     
                }
            }
        }
            ?>
        </div>

        </div>

     
        <div class="col-sm-3"> 
          
        </div>
    </div>

</div>


    
<?php include 'footer.html' ?>