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
    <h3 style="text-align: center; margin-top: 20px; color:purple">View Plans</h3>
    <!-- On tables -->
    <table border="1px" class="table mt-4">
  <thead>
    <tr >
      <th scope="col" style="background-color:purple">Plan Name</th>
      <th scope="col"style="background-color:purple">Speed Limit</th>
      <th scope="col"style="background-color:purple">Cost</th>
      <th scope="col"style="background-color:purple">Duration</th>
      <th scope="col"style="background-color:purple">Delete</th>
      <th scope="col"style="background-color:purple">Edit</th>
    </tr>
  </thead>
  <tbody>
    <?php
     $query = "SELECT * FROM addplan";
     $result = mysqli_query($db, $query);

        foreach($result as $item):
        ?>
       <tr>
            <td><?= $item['pname'];?></td>
            <td><?= $item['slimit'];?></td>
            <td><?= $item['cost'];?></td>
            <td><?= $item['duration']?></td>
            <td><a href="deletes.php?del=<?= $item['id'];?>" class="btn btn-danger text-white btn-sm">Delete</a></td>
            <td><a href="Pedit.php?id=<?= $item['id'];?>" class="btn btn-success text-white btn-sm">edit</a></td>
                     
         </tr>
        <?php endforeach;?>
    
    
  </tbody>
</table>
</div>

</body>
</html>