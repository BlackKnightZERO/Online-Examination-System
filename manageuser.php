<?php include_once('connection.php'); ?>
<?php
session_start();
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
        .mar
        {
                margin-left: 45%;
                
        }
        .mar2
        {
            margin-left: 41%;
        }
        .mar3
        {
            margin-top:3%;
        }
     </style>
     <body class="img">
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
         <div style="margin-left: 35%" class="mar3">
            <?php
    $sql = "SELECT user_id, user_name, password FROM user";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table cellpadding=5px><tr><th class='w3-grey'> USER ID </th><th class='w3-grey'> USER NAME </th><th class='w3-grey'>PASSWORD</th><th class='w3-grey'>Action</th><th class='w3-grey'>Action</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
            {
        echo "<tr class='w3-brown' align=center><td>".$row["user_id"]."</td><td>".$row["user_name"]."</td><td>".$row["password"]."</td>
                        <td><a href='#'>EDIT</a></td><td><a href='delete.php?id=".$row['user_id']."'>DELETE</a></td>";
                            
                         //   <input class='w3-radio' type='radio' name='take' value='".$row["course_id"]."'>
                         //  <label class='w3-validate'>Take</label>"; 
                
            }
            echo "</table>";
            } else {
            echo "0 results";
            }
?>
    </div>     
         
         
</body>
<?php
         mysqli_close($conn);
?> 
</html>