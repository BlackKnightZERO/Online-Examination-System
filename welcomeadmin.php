<?php include_once('connection.php'); ?>
<?php
session_start();
//echo $_SESSION['admin_name'];
//session_start();
if (!isset($_SESSION['admin_name'])) 
    {
      header('Location: admin.php');
      exit;
  	}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles/w3.css">
        <title>Online Exam System</title>
    </head>
    <style> 
        .img {
    background-image:url('./image/admin2.jpg');
    background-size: 100% 1000px;
    background-repeat: no-repeat;
}
     </style>
     <body class="img mar3">
         <ul class="w3-navbar w3-black">
             <li><a class="w3-text-blue" href="#"><?php echo $_SESSION['admin_name'];?></a></li>
             <li class="w3-right w3-teal"><a href="adminlogout.php">Log Out</a></li>
    </ul>
        
         <div style="margin-left:33%">
             <a class="w3-btn w3-teal" href="manageuser.php">Manage User</a>
             <a class="w3-btn w3-teal" href="courseadd.php">Course Add</a>
             <a class="w3-btn w3-teal" href="questionadd.php">Question Add</a>
             <a class="w3-btn w3-teal" href="#">Manage Result</a>
             
        </div>
         
         
         
</body>


<?php
         mysqli_close($conn);
?> 
</html>