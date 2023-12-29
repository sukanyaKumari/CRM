<?php require_once("config.php");
 if (!isset($_SESSION['admin_log'])) {
  header("Location: index.php");
}
if(isset($_GET['del'])){
    $id = $_GET['del'];
    $query ="delete from addemp where id='$id'";
    $run = mysqli_query($db, $query);
    if ($run === TRUE) {
        echo "Record deleted successfully";
        header("Location: view_emp.php");
        exit();
       
      } else {
        echo "Error deleting record: ";
      }

}

?>