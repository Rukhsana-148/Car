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



    $sql = "SELECT `Name`, `Email`, `Designation`, `Car Type`, `Car Name`, `Location`, `Time` FROM `carrequest`";
    $result = mysqli_query($conn, $sql);
    if($conn->query($sql) === TRUE){
        echo "successs";
    }


?>


<?php include 'header.html'?>
<div class="form-container request_table">
  <a href="index.php"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
<?php
if($result == TRUE){
    while($rows = mysqli_fetch_assoc($result)){?>
    <h4> Car Request</h4>
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
                        <td data-label="Action">
                          <nav>
                            <ul>
                              <li>
                              <form action="approve.php" method="post">
                            <input type="hidden" name="name" value="<?php echo $rows['Name'] ?>"/>
                            <input type="hidden" name="email" value="<?php echo $rows['Email'] ?>"/>
                            <input type="hidden" name="designation" value="<?php echo $rows['Designation'] ?>"/>
                            <input type="hidden" name="carType" value="<?php echo $rows['Car Type'] ?>"/>
                            <input type="hidden" name="carname" value="<?php echo $rows['Car Name'] ?>"/>
                            <input type="hidden" name="location" value="<?php echo $rows['Location'] ?>"/>
                            <input type="hidden" name="time" value="<?php echo $rows['Time'] ?>"/>
                            <input type="hidden" id="e" name="date" class="form-control" required="1" placeholder="+880: Enter your phone number">
                            <input type="submit" name="approve" value="Approve" class="btn btn-primary text-white"/>
                          </form>
                              </li>
                              <li>
                              <form action="cancel.php" method="post">
                            <input type="hidden" name="name" value="<?php echo $rows['Name'] ?>"/>
                            <input type="hidden" name="email" value="<?php echo $rows['Email'] ?>"/>
                            <input type="hidden" name="designation" value="<?php echo $rows['Designation'] ?>"/>
                            <input type="hidden" name="carType" value="<?php echo $rows['Car Type'] ?>"/>
                            <input type="hidden" name="carname" value="<?php echo $rows['Car Name'] ?>"/>
                            <input type="hidden" name="location" value="<?php echo $rows['Location'] ?>"/>
                            <input type="hidden" name="time" value="<?php echo $rows['Time'] ?>"/>
                            <input type="hidden" id="e" name="date" class="form-control" required="1" placeholder="+880: Enter your phone number">

                            <input type="submit" name="cancel" value="Cancel" class="btn btn-danger text-white"/>

                          </form>

                              </li>
                            </ul>
                          </nav>
                         
                       

                        </td>
                    </tr>
                   </tbody>
        

    </table>

    <?php
    }
}

?>
<script type="text/javascript">
    document.getElementById('e').value = new Date().toISOString().substring(0, 10);
</script>
</div>

<?php include 'footer.html'?>