<?php include_once('connection.php'); ?>
<?php
session_start();
if (!isset($_SESSION['admin_name'])) 
    {
      header('Location: admin.php');
      exit;
  }
    
    ?>
<?php
$errorMassage ="";
$succ = "";
$emailErr="";
$u_id="";
if(isset($_POST['submit'])){

		if (empty($_POST['cid']) || empty($_POST['cname'])){

			$errorMassage='fild is empty! ';
                        
		}
                
                        else
                         {            
			$cid = $_POST['cid'];
                        $cname=$_POST['cid'];
			

			$sql = "INSERT INTO course (course_id,course_name)
				VALUES ('".$cid."','".$cname."')";

				if (mysqli_query($conn, $sql)) {
				     $succ = "New course added successfully";
                                     
				} else {
				    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
                        }
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
            margin-top:5%;
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
          <div style="margin-left:35%">
         <form class="w3-container w3-card-4 w3-half" action="" method="post">
             
                <p>      
                <label class="w3-text-brown" ><b>Course ID</b></label>
                <input class="w3-input w3-border" name="cid" type="text" required></p>
                <p>      
                <label class="w3-text-brown"><b>Course Name</b></label>
                <input class="w3-input w3-border" name="cname" type="text" required></p>
                
                   
                
                <p style="margin-left:41%">      
                    <input type="submit" class="w3-btn w3-ripple w3-green" name="submit" value="Add"></p>
        </form> 
              <h4 class="w3-text-green"><?php echo $succ ?></h2>
               <h2><?php echo $errorMassage ?></h2>
               
</body>
<?php
         mysqli_close($conn);
?> 
</html>