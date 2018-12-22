<?php
include_once('connection.php'); 

session_start();
if (!isset($_SESSION['admin_name'])) 
    {
      header('Location: admin.php');
      exit;
  	}

	if(isset($_REQUEST['id'])){
	$id = $_REQUEST['id'];
        echo $id;
        }
        
        $sql = "DELETE FROM user WHERE user_id='$id'";

        if (mysqli_query($conn, $sql)) {
       
            header('location:manageuser.php');
        } else {
        echo "Error deleting record: " . mysqli_error($conn);
        }

?>