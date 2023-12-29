
<?php require_once("config.php");
 if (!isset($_SESSION['admin_log'])) {
    header("Location: index.php");
  }
$id = $_GET['id'];
$query = "SELECT * FROM addcom where id='$id";
$result = mysqli_query($db, $query);
$row =$result;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require_once("common.php");?>
<div class="container row row m-auto justify-content-center mt-5">
<div class="card" style="width: 20rem;">
<h3 style="text-align: center; margin-top: 20px; color:purple">Update Statust</h3>
    <div class="card-body">
        <form action="" method="post">
                          
        <div class="mt-3">
             <select name="status" class="form-control" >
            
            <option value="1">solved</option>
            <option value="2">Rejected</option>
            <option value="0">Pending</option>
          
        </select>
        </div>
                          
        <div class="mt-3">
            <input type="submit" name="send" class="btn btn-success form-control">
        </div>
        <div class="">
            <a href="view_comp.php" class="btn btn-primary">Back To Previous Page</a>
        </div>
</form>
<?php
    if(isset($_POST['send'])){
        $id = $_GET['id'];
        $status = $_POST['status'];
        $query="UPDATE addcom SET status='$status' WHERE id='$id'";
        $run =mysqli_query($db, $query);
        
        if($run == true){
            echo "edit hoga";
        } 
        else{
                echo"fail";
        }
    }
    ?>
</div> 
 </div>
</div>
</body>
</html>

