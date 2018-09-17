<?php
session_start();

include 'includes/connect.php';

if(isset($_POST['login'])){
    $uname = $_POST['uname'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM tblusers WHERE Username='$uname' and Password='$password' ";
    $query = mysqli_query($con, $sql);
    
    $count = mysqli_num_rows($query);

    if($count == 1){
        $_SESSION['alogin'] = $_POST['uname'];
        header('location:dashboard.php');
    }else{
        echo "<script> alert('Login Failed!');</script>";
        header('location:login.php');
    }
   
}else{


?>

<!DOCTYPE html>
<html>
    <head><title>Dashboard</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    </head>
        
        <body>
            <header></header>
            <main>
            <div class="container" align="center">
                <div class="col-md-6">
                <div class="page-header">
                    <br>
                    <h2 class="text-center text-primary">User Login</h2>
                    <hr>
                    <br><br>
                </div>

                <form method="POST">
                    <div class="form-group">
                        <label for="username" class="control-label">Username:</label>
                        <input type="text" class="form-control" name="uname" required />
                    </div>

                    <div class="form-group">
                        <label for="password" class="control-label">Password:</label>
                        <input type="password" class="form-control" name="password" required />
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" type="submit" name="login">Login</button>
                        <button class="btn btn-warning" type="reset">Reset</button> 
                    </div>
                </form>


                
                    <p class="text-center">
                        Don't have an Account? Register <a href="register.php">Here</a>
                    </p>

                </div>
                
                            
</div>
</body>
</html>
<?php } ?>