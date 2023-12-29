
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require_once("common.php");?>
<div class="container row row m-auto justify-content-center">
    <div class="col-lg-5 mt-5 border " style="width: 50rem;">
        <div class="card-title text-center mt-5" style="color:white"><h3 >Add Plan</h3></div>

    <div class="cord-body" style="padding:10px 70px 40px 70px">
    <form action="" method="post">
  <div class="mb-3" >
    <label  class="form-label" style="color:white">Plan Name</label>
    <input type="text" class="form-control" name="pname">
  </div>
  <div class="mb-3" >
    <label  class="form-label" style="color:white">Speed Limit</label>
    <input type="text" class="form-control" name="slimit">
  </div>
  <div class="mb-3" >
    <label  class="form-label" style="color:white">Cost</label>
    <input type="text" class="form-control" name="cost">
  </div>
    
  <div class="mb-3">
    <label  class="form-label" style="color:white">Duration</label>
    <input type="text" class="form-control" name="duration">
  </div>
 
  <button type="submit" name="add_plan" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>
</div>
<?php
if (isset($_POST['add_plan'])) {
    $pname = $_POST["pname"];
    $slimit = $_POST["slimit"];
    $cost = $_POST["cost"];
    $duration = $_POST["duration"];

    $query ="insert into addplan (pname,slimit,cost,duration) value ('$pname','$slimit','$cost','$duration')";
   
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