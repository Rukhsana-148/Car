<?php include 'header.html'?>
<div class="form-container">
    <div class="row sign_up">
        <div class="col-sm-3">
        <a href="index.php"> <i class="fa fa-arrow-left" aria-hidden="true"></i></a>
        </div>
        <div class="col-sm-6">
            <h5>Sign Up</h5>
        <form action="success.php" method="post">
        <level for="id">ID</level>
    <input type="number" name="id" required="1" placeholder="Enter your id" class="form-control"/>
    <level for="name">Name</level>
    <input type="text" name="name" required="1" placeholder="Enter your name" class="form-control"/>
    <level for="name">Email</level>
    <input type="email" name="email" required="1" placeholder="Enter your email" class="form-control"/>
    <level for="name">Designation</level>
    <input type="text" name="designation" required="1" placeholder="Enter your designation" class="form-control"/>
    <level for="name">Contact No.</level>
    <input type="number" name="contact" required="1" placeholder="Enter your contact no." class="form-control"/>
    <level for="name">Password </level>
    <input type="text" name="password" required="1" placeholder="Enter your password" class="form-control"/>
    <level for="name">Confirm Password</level>
    <input type="text" name="retype" required="1" placeholder="Confirm password" class="form-control"/>
   <input type="submit" name="submit" class="btn btn-primary text-white" value="Submit"/>
</form>
        </div>
        <div class="col-sm-3">
      
        </div>
    </div>

</div>
<?php include 'footer.html' ?>