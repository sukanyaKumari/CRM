
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require_once("common.php");
 
?>
<div class="container row row m-auto justify-content-center">
<div class="col-lg-5 mt-5 border " style="width: 50rem;">
        <div class="card-title text-center mt-3"><h3 style="color:white">Add Employee</h3></div>

    <div class="cord-body" style="padding:10px 70px 40px 70px">
    <form action="" method="post"  style="color:white">
  <div class="mb-3" >
    <label  class="form-label">Employee Name</label>
    <input type="text" class="form-control" name="ename">
  </div>
  <div class="mb-3" >
    <label  class="form-label">contact</label>
    <input type="text" class="form-control" name="contact">
  </div>
  <div class="mb-3" >
    <label  class="form-label">Email</label>
    <input type="text" class="form-control" name="email">
  </div> 
  <div class="mb-3" >
    <label  class="form-label">PassWord</label>
    <input type="text" class="form-control" name="pass">
  </div>
    
  <div class="mb-3">
    <label  class="form-label">Region</label>
    <input type="text" class="form-control" name="region">
  </div>
 
  <button type="submit" name="add_emp" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>
</div>
<?php
if (isset($_POST['add_emp'])) {
    $ename = $_POST["ename"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $region = $_POST["region"];

    $query ="insert into addemp (ename,contact,email,pass,region) value ('$ename','$contact','$email','$pass','$region')";
   
    $run = mysqli_query($db, $query);
    if($run){
        // header("Location: dashboard.php");
        // exit();
        // echo "<script> location.href='view_plan.php'; </script>";
        echo "<script> 
       
        alert('data is inserted') ;
        </script>";
    }
    else{
        echo "<script> 
       
        alert('error') ;
        </script>";
    }
    
}
?>

</body>
</html>