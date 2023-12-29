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
    <h3 style="text-align: center; margin-top: 20px; color:purple">View Complaint</h3>
    <!-- On tables -->
    <table border="1px" class="table mt-4">
  <thead>
    <tr >
      <th scope="col" style="background-color:purple"> id</th>
      <th scope="col"style="background-color:purple">Customer Name</th>
      <th scope="col"style="background-color:purple">Complaint Description</th>
      <th scope="col"style="background-color:purple">Complaint date</th>
      <th scope="col"style="background-color:purple">Status</th>
      <th scope="col"style="background-color:purple">Assign Status</th>
    </tr>
  </thead>
  <tbody>
    <?php
     $query = "SELECT * FROM addcom";
     $result = mysqli_query($db, $query);

        foreach($result as $item):
        ?>
       <tr>
            <td><?= $item['id'];?></td>
            <td><?= $item['cname'];?></td>
            <td><?= $item['cd'];?></td>
            <td><?= $item['date']?></td>
            <td><?php if($item['status'] ==0){
             echo"Initiated";
            }
            else if($item['status'] ==1){
            echo"Solved";
            }
            else{
            echo"Rejected";
            }
             ?>
           
            </td>
            <td><a href="updateStatus.php?id=<?= $item['id'];?>" class="<?php if($item['status'] ==1){
              echo"btn btn-success";
            } elseif($item['status'] ==0){
              echo"btn btn-primary";
            }else{
              echo"btn btn-warning";
            }?>"  >
            
            <?php if($item['status'] ==0){
             echo"Initiated";
            }
            else if($item['status'] ==1){
            echo"Solved";
            }
            else{
            echo"Rejected";
            }
             ?>
            </a>
            </td>
                   
         </tr>
        <?php endforeach;?>
    
    
  </tbody>
</table>
</div>

</body>
</html>