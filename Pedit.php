
<?php require_once("config.php");
 if (!isset($_SESSION['admin_log'])) {
  header("Location: index.php");
}
$id = $_GET['id'];
$query = "SELECT * FROM addplan where id='$id'";
$result = mysqli_query($db, $query);

if(mysqli_num_rows($result)>0) {
  while ($row = mysqli_fetch_assoc($result)) {
?>

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

<div class="container row row m-auto justify-content-center mt-5">
<div class="col-lg-5 mt-3 border " style="width: 50rem;">
        <div class="card-title text-center mt-3"><h3 style="color:white">Update Plan</h3></div>

    <div class="cord-body" style="padding:10px 70px 40px 70px; color: white">
    <form action="" method="post">
  <div class="mb-3" >
    <label  class="form-label">Plan Name</label>
    <input type="text" class="form-control" name="pname" value="<?php echo $row['pname']; ?>">
  </div>
  <div class="mb-3" >
    <label  class="form-label">Speed Limit</label>
    <input type="text" class="form-control" name="slimit" value="<?= $row['slimit'];?>">
  </div>
  <div class="mb-3" >
    <label  class="form-label">Cost</label>
    <input type="text" class="form-control" name="cost" value="<?=$row['cost'];?>">
  </div>
    
  <div class="mb-3">
    <label  class="form-label">Duration</label>
    <input type="text" class="form-control" name="duration" value="<?= $row['duration'];?>">
  </div>
 
  <button type="submit" name="up_plan" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>
</div>
<?php
}
}?>
<?php
    if(isset($_POST['up_plan'])){
        $id = $_GET['id'];
        $pname = $_POST['pname'];
        $slimit = $_POST['slimit'];
        $cost = $_POST['cost'];
        $duration = $_POST['duration'];
        $query="UPDATE addplan SET pname='$pname',slimit='$slimit',cost='$cost',duration='$duration' WHERE id='$id'";
        $run =mysqli_query($db, $query);
        
        if($run == true){
            echo" <script> 
       
            alert('data is updated') ;
            </script>";
        } 
        else{
                echo"fail";
        }
    }
    ?>
</body>
</html>

