<?php include 'header.html' ?>
<div class="form-container">

<div class="row">
    <div class="col-sm-3 sign_up">
    <a href="index.php"> <i class="fa fa-arrow-left" aria-hidden="true"></i></a>
    </div>
    <div class="col-sm-6">
        <h5>Sign In</h5>
    <form action="profile.php" method="post">
        <label for="email">Email</label>
        <input type="text" name="email"  required="1" placeholder="Enter your email" class="form-control"/>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter your password" required="1" class="form-control"/>
        <input type="submit" name="submit" class="btn btn-primary text-white" value="Submit"/>
    </form>
    </div>
    <div class="col-sm-3">
    
    </div>
</div>

   

</div>
<?php include 'footer.html'?>
