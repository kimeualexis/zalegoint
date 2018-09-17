<?php

include  'includes/connect.php';

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $password = md5($_POST['password']);

$sql = "INSERT INTO tblusers(FirstName,LastName,Username,Password) VALUES ('$fname','$lname','$uname','$password')";
$query = mysqli_query($con, $sql);

if(!$query){
    echo "<script> alert('Registration Failed!!');</script>";

    header('location: register.php');
}else{
    echo "<script> alert('Registration Successful!!');</script>";
    header('location: index.php');
}
}else{
?>


<!DOCTYPE html>
<html>
    <head><title>Register</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    </head>
        
        <body>
            <header></header>
            <main>
            <div class="container" align="center">
                <div class="col-md-6">

 <div class="page-header">
                    <br>
                    <h2 class="text-center text-primary">User Registration</h2>
                    <hr>
                    <br><br>
                </div>
                <form method="POST" class="form-horizontal">
                    <div class="form-group">
                    <label for="fname" class="label-control">First Name:</label>
                    <input type="text" class="form-control" name="fname" required />
                    </div>

                    <div class="form-group">
                        <label for="lname" class="control-label">Last Name:</label>
                        <input type="text" class="form-control" name="lname" required />
                    </div>

                    <div class="form-group">
                        <label for="username" class="control-label">Username:</label>
                        <input type="text" class="form-control" name="uname" required />
                    </div>

                    <div class="form-group">
                        <label for="password" class="control-label">Password:</label>
                        <input type="password" class="form-control" name="password" required />
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-success" name="submit">Submit</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </div>

                </form>

                <p class="text-center">
                        Already have an Account? Login <a href="index.php">Here</a>
                    </p>
               </div>
               
            </div>
            </main>
            
        </body>
  </html>

<?php } ?>