<?php 
session_start();

include 'includes/connect.php';

if(strlen($_SESSION['alogin'])== 0){
echo "<script> alert('Kindly, Log in First!');</script>";
header('location: login.php');
}else{


?>
<!DOCTYPE html>
<html>
    <head><title>Dashboard</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


    </head>
        
        <body>
            <header></header>
            <main>
            <div class="container">
                <div class="col-md-4" align="center">
                <h4 class="text-center">
                    <br>
                   Welcome: <?php echo $_SESSION['alogin'];?>
                </h4>
                </div>

                <div class="col-md-12" align="right">
                <i class="fa fa-user">&nbsp;<a href="logout.php">Logout</a></i>
                </div>
                
                <div class="page-header">
                    <br>
                    <h2 class="text-center text-primary">Users</h2>
                    <hr>
                    <br><br>
                </div>

                <?php 
                $sql = "SELECT * FROM tblusers ";
                $query = mysqli_query($con, $sql);

                echo "<table class='table table-hover'>
                <thead class='alert-info'>
                <th>Id</th>
                <th>First Name</th><th>Last Name</th><th>Username</th></thead>";

                while($row=mysqli_fetch_assoc($query)){
                echo "<tr><td>".$row['ID']."</td><td>".$row['FirstName']."</td><td>"
                .$row['LastName']."</td><td>".$row['Username']."</td></tr>";
                }
                "</table>"
               
                ?>

</div>
</body>
</html>
<?php } ?>