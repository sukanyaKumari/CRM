<?php require_once("config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php require_once("header.php");?>
    <div class="container row row m-auto justify-content-center">
    <div class="col-lg-5 mt-5 p-4 border" style="width: 30rem;">
    
<h3 class="text-light">Login Page</h3>
  <div class="cord-body"  style="color:white; padding:10px 40px 20px 40px">
    
    <form action="" method="post">
  <div class="mb-3" >
    <label  class="form-label">Username</label>
    <input type="text" class="form-control" name="username">
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="dropdown">
  <button class="btn text-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 350px;">
    Login
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#" ><button type="submit" name="admin_login" class="btn btn-primary">Admin Login</button></a></li>
    <li><a class="dropdown-item" href="#" ><button type="submit" name="emp_login" class="btn btn-primary">Employee Login</button></a></li>
  </ul>
</div>
  <!-- <button type="submit" name="admin_login" class="btn btn-primary">Submit</button> -->
</form>
    </div>
</div>
</div>

<?php
        

           if (isset($_POST['admin_login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
            $result = mysqli_query($db, $query);
            if($result && mysqli_num_rows($result) > 0){
                $_SESSION['admin_log'] = $username;
                header("Location: dashboard.php");
                exit();
                
            }
            else{
                echo"Username and password is incorrect plz try again";
            }
                
           
            // echo$password;
        }
        else if (isset($_POST['emp_login'])){
          $ename = $_POST['username'];
            $pass = $_POST['password'];
          
            $query = "SELECT * FROM addemp WHERE ename='$ename' AND pass='$pass'";
            $result = mysqli_query($db, $query);
            if($result && mysqli_num_rows($result) > 0){
                $_SESSION['admin_log'] = $ename;
                header("Location: emp_work.php");
                exit();
                
            }
            else{
                echo"Username and password is incorrect plz try again";
            }

        }
        
           
           ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>