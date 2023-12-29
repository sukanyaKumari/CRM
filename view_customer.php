<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require_once("common.php");?>
<div class="container">
    <h3 style="text-align: center; margin-top: 20px; color:purple">View Customer</h3>
    <!-- On tables -->
    <table border="1px" class="table mt-4">
  <thead>
    <tr >
      <th scope="col" style="background-color:purple">Employee Name</th>
      <th scope="col"style="background-color:purple">Contact</th>
      <th scope="col"style="background-color:purple">Email Id</th>
      <th scope="col"style="background-color:purple">Age</th>
      <th scope="col"style="background-color:purple">Gender</th>
      <th scope="col"style="background-color:purple">Business</th>
      <th scope="col"style="background-color:purple">Business Type</th>
      <th scope="col"style="background-color:purple">Address</th>
      <th scope="col"style="background-color:purple">Plan</th>
      <th scope="col"style="background-color:purple">Buying Date</th>
      <!-- <th scope="col"style="background-color:purple">Exp Date</th> -->
      <th scope="col"style="background-color:purple">Edit</th>
      <th scope="col"style="background-color:purple">Delete</th>
    </tr>
  </thead>
  <tbody>
   <!--  <?php
    $data ="SELECT * FROM addplan JOIN addcust ON addplan.pname= addcust.pname";
    $record = mysqli_query($db,$data);
    while($row = mysqli_fetch_array($record)){ 

    $a = $row['duration'];
    echo $a;
    }
     ?>  -->
    <?php 
     $query = "SELECT * FROM addcust";
     $result = mysqli_query($db, $query);

        foreach($result as $item):
        ?>
       <tr>
            <td><?= $item['cname'];?></td>
            <td><?= $item['contact'];?></td>
            <td><?= $item['email'];?></td>
            <td><?= $item['age']?></td>
            <td><?= $item['gender']?></td>
            <td><?= $item['business']?></td>
            <td><?= $item['btype']?></td>
            <td><?= $item['address']?></td>
            <td><?= $item['pname']?></td>
            <td><?= $item['pdate']?></td> 
            <td><a href="editcustomer.php?id=<?= $item['id'];?>" class="btn btn-success text-white btn-sm">edit</a></td>
             <td><a href="d.php?del=<?= $item['id'];?>" class="btn btn-danger text-white btn-sm">Delete</a></td>
                     
         </tr>
        <?php endforeach;?>
    
    
  </tbody>
</table>
</div>

</body>
</html>