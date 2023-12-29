<?php require_once("config.php");
 
  if (!isset($_SESSION['admin_log'])) {
    header("Location: index.php");
  }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <style>
        
    </style>
<?php require_once("common.php");?>
<div class="container">
    <div class="row text-center" style="margin-top: 100px;">
       <div class="col-lg-3">
        <div class="card">
            <div class="card-title mt-4"><h1>Plans</h1></div>
            <div class="card-body">
            <h1 style="text-weight: bold">
            <?php
                $query = "SELECT * FROM addplan";
                $result = mysqli_query($db, $query);
                if ($result) 
                { 
                    // it return number of rows in the table. 
                    $row = mysqli_num_rows($result); 
                      
                       if ($row) 
                          { 
                             printf($row); 
                          } 
                    // close the result. 
                    mysqli_free_result($result); 
                } 
            ?> 
            </h1>
            </div>
        </div>
       </div>
       <div class="col-lg-3">
        <div class="card ">
            <div class="card-title mt-4"> <h1>Employees</h1></div>
            <div class="card-body">
           <h1 style=" text-weight: bold"> <?php
                $query = "SELECT * FROM addemp";
                $result = mysqli_query($db, $query);
                if ($result) 
                { 
                    // it return number of rows in the table. 
                    $row = mysqli_num_rows($result); 
                      
                       if ($row) 
                          { 
                             printf($row); 
                          } 
                    // close the result. 
                    mysqli_free_result($result); 
                } 
            ?> </h1>

            </div>
        </div>
       </div>
       <div class="col-lg-3">
        <div class="card ">
            <div class="card-title mt-4"><h1>Customers</h1> </div>
            <div class="card-body">
            <h1 style=" text-weight: bold">
            <?php
                $query = "SELECT * FROM addcust";
                $result = mysqli_query($db, $query);
                if ($result) 
                { 
                    // it return number of rows in the table. 
                    $row = mysqli_num_rows($result); 
                      
                       if ($row) 
                          { 
                             printf($row); 
                          } 
                    // close the result. 
                    mysqli_free_result($result); 
                } 
            ?> 
            </h1>
            </div>
        </div>
       </div>
       <div class="col-lg-3">
        <div class="card">
            <div class="card-title mt-4"><h1>Complaint</h1></div>
            <div class="card-body">
            <h1 style=" text-weight: bold">
            <?php
                $query = "SELECT * FROM addcom";
                $result = mysqli_query($db, $query);
                if ($result) 
                { 
                    // it return number of rows in the table. 
                    $row = mysqli_num_rows($result); 
                      
                       if ($row) 
                          { 
                             printf($row); 
                          } 
                    // close the result. 
                    mysqli_free_result($result); 
                } 
            ?> 
            </h1>
            </div>
        </div>
       </div>
    </div>
</div>
</body>
</html>
