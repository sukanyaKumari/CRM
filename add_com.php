
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
        <div class="card-title text-center mt-3"><h3 style="color:white" >Add Complaint</h3></div>

    <div class="cord-body" style="padding:10px 70px 40px 70px; ">
    <form action="" method="post">
    <div class="mb-3">
        <label  style="color:white" >Plan</label>
        <select name="cname" class="form-control" >
            <?php
              $query = "SELECT * FROM addcust";
              $result = mysqli_query($db, $query);
                foreach($result as $cano):
                ?>
                <option value="<?= $cano['cname'];?>"><?= $cano['cname'];?></option>
                <?php endforeach;?>
            </select>
    </div>
  <div class="mb-3" >
    <label  class="form-label"  style="color:white">Complaint Description</label>
    <input type="text" class="form-control" name="cd">
  </div>
  <div class="mb-3" >
    <label  class="form-label"  style="color:white">Date</label>
    <input type="date" class="form-control" name="date">
  </div>
 
  <button type="submit" name="add_cmp" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>
</div>
<?php
if (isset($_POST['add_cmp'])) {
    $cname = $_POST["cname"];
    $cd = $_POST["cd"];
    $date = $_POST["date"];

    $query ="insert into  addcom (cname,cd,date) value ('$cname','$cd','$date')";
   
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