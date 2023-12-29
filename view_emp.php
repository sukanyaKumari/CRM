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
    <h3 style="text-align: center; margin-top: 20px; color:purple">View Employees</h3>
    <!-- On tables -->
    <table border="1px" class="table mt-4">
  <thead>
    <tr >
      <th scope="col" style="background-color:purple">Employee Name</th>
      <th scope="col"style="background-color:purple">Contact</th>
      <th scope="col"style="background-color:purple">Email</th>
      <th scope="col"style="background-color:purple">Region</th>
      <th scope="col"style="background-color:purple">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
     $query = "SELECT * FROM addemp";
     $result = mysqli_query($db, $query);

        foreach($result as $item):
        ?>
       <tr>
            <td><?= $item['ename'];?></td>
            <td><?= $item['contact'];?></td>
            <td><?= $item['email'];?></td>
            <td><?= $item['region']?></td>
            <td><a href="dlt.php?del=<?= $item['id'];?>" class="btn btn-danger text-white btn-sm">Delete</a></td>
                     
         </tr>
        <?php endforeach;?>
    
    
  </tbody>
</table>
</div>

</body>
</html>