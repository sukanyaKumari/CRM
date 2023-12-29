<?php require_once("config.php");
 if (!isset($_SESSION['admin_log'])) {
  header("Location: index.php");
}
$id = $_GET['id'];
$query = "SELECT * FROM addcust where id='$id'";
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
<?php require_once("common.php");?>
<div class="container row row m-auto justify-content-center">
<div class="col-lg-5 mt-3 border " style="width: 50rem;">
        <div class="card-title text-center mt-2"><h3 style="color:white">Update Customer</h3></div>

    <div class="cord-body" style="padding:10px 70px 40px 70px">
    <form action="" method="post" style="color:white">
  <div class="mb-3" >
    <label  class="form-label">Customer Name</label>
    <input type="text" class="form-control" name="cname" value="<?=$row['cname'] ?>">
  </div>
  <div class="row">
    <div class="col"><div class="mb-3" >
    <label  class="form-label">Contact</label>
    <input type="number" class="form-control" name="contact" value="<?=$row['contact'] ?>">
  </div></div>
    <div class="col">
    <div class="mb-3" >
    <label  class="form-label">Age</label>
    <input type="number" class="form-control" name="age" value="<?=$row['age'] ?>">
  </div>
    </div>
  </div>
  <div class="mb-3" >
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" name="email" value="<?=$row['email'] ?>">
  </div>
  
  
  <div class="row">
    <div class="col-lg-4">
    <div class="mb-3">
        <label>Gender</label>
            <select name="gender" class="form-control" value="<?=$row['gender'] ?>">
                <option value="Male">Male</option>   
                <option value="Female">Female</option>   
                <option value="Other">Other</option>   
            </select>
    </div>
    </div>
    <div class="col-lg-4">
    <div class="mb-3">
        <label>Plan</label>
        <select name="pname" class="form-control" value="<?=$row['pname'] ?>">
            <?php
              $query = "SELECT * FROM addplan";
              $result = mysqli_query($db, $query);
                foreach($result as $cano):
                ?>
                <option value="<?= $cano['pname'];?>"><?= $cano['pname'];?></option>
                <?php endforeach;?>
            </select>
    </div> 
    </div>
    <div class="col-lg-4">
    <div class="mb-3">
        <label>Buying Date</label>
        <input type="date" name="pdate"class=" form-control">
    </div> 
    </div>
  </div>
 <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
        <label>Business</label>
            <select name="business" class="form-control" value="<?=$row['business'] ?>">
                <option value="Yes">Yes</option>   
                <option value="No">No</option>    
            </select>
    </div>
 
    </div>
    <div class="col-lg-6">
    <div class="mb-3">
        <label>Business Type</label>
            <select name="btype" class="form-control" value="<?=$row['btype'] ?>">
                <option value="Large">Large</option>   
                <option value="Small">Small</option>   
                <option value="No">No</option>   
            </select>
    </div>
    </div>
 </div>
 
    
    <div class="mb-3">
        <label>Customer Address</label>
        <input type="text" name="address" class="form-control" value="<?=$row['address'] ?>">
    </div>
 
 
  <button type="submit" name="edit_cus" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>
</div>
<?php
}
}?>
<?php
    if(isset($_POST['edit_cus'])){
        $id = $_GET['id'];
        $cname = $_POST['cname'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $business = $_POST['business'];
        $btype = $_POST['btype'];
        $address = $_POST['address'];
        $pname = $_POST['pname'];
        $pdate = $_POST['pdate'];
        $query="UPDATE addcust SET cname='$cname',contact='$contact',email='$email',age='$age',gender='$gender',business='$business',btype='$btype',address='$address',pname='$pname',pdate='$pdate' WHERE id='$id'";
        $run =mysqli_query($db, $query);
        
        if($run == true){
            echo"<script>
            alert('data is updated');
            
            </script>";
        } 
        else{
                echo"fail";
        }
    }
    ?>


</body>
</html>