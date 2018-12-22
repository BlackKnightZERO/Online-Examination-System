<?php include_once("connection.php"); ?>
<?php
	session_start();
	if (!isset($_SESSION['user_id'])) {
      header('Location: sign_up_log_in.php');
      exit;
  	}
 

?>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>



<?php
$errorMassage ="";
$succ = "";
$emailErr="";
$u_id="";
if(isset($_POST['submit2']))
    {
//    $_SESSION['last_time']=time(); 
    $selected_val1 = $_POST['take'];
    $selected_val2 = $_POST['difficulty'];
    $_SESSION['course']=$selected_val1;
        header("Location:test.php?id=$selected_val1&name=$selected_val2");
        exit;
		
    }
    else
    {
        
    }
	
?>



<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles/w3.css">
        <title></title>
    </head>
    <style> 
        .bgimg {
    background-image:url('./image/paper.jpg');
    background-size: 103% 920px;
    background-repeat: no-repeat;
               }
    .font {
    font-family: "Comic Sans MS", cursive, sans-serif;
    }

     </style>
    <body class="bgimg">
        <ul class="w3-navbar w3-black">
        <li><a class="w3-text-blue" href="#"><?php echo $_SESSION['user_name'];?></a></li>
            
        <li><a href="update.php">Edit Profile</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">History</a></li>
        <li class="w3-right w3-teal"><a href="logout.php">Log Out</a></li>
    </ul>
        
        <div class="w3-container w3-center">
            <h1 class=" w3-animate-left font">Welcome <?php echo $_SESSION['user_name'] ?></h1>
            <img src="./image/avatar2.png" width="3%">
            <h4 class=" w3-animate-right">New challage awaits you!</h4>
        </div>
        
        <form method="post">
        <div class="w3-center">
            <h1 class="w3-xxlarger w3-text-teal"><i>Courses for online exams...</i></h1>
        </div>
        
        <div class="w3-container w3-margin-bottom" style="margin-left:40%"> 
                       <input class="w3-radio" type="radio" name="difficulty" value="1" checked>
                           <label class="w3-validate w3-text-blue">Easy &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
                         
                            <input class="w3-radio" type="radio" name="difficulty" value="2">
                           <label class="w3-validate w3-text-purple">Moderate &nbsp; &nbsp; &nbsp;</label>
                         
                            <input class="w3-radio" type="radio" name="difficulty" value="3">
                           <label class="w3-validate w3-text-red">Hard &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
                           
                           <input type="submit" class="w3-btn w3-green" name="submit2" value="TEST MYSELF">
                           
         </div>   
          
          

          
        
        
        <div class="w3-center w3-container" style="margin-left:38%">
            
<?php
$sql = "SELECT course_id, course_name FROM course";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table cellpadding=5px><tr><th class='w3-grey'> COURSE ID </th><th class='w3-grey'> COURSE NAME </th><th class='w3-red'>ACTION</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
            {
        echo "<tr align=center><td>".$row["course_id"]."</td><td>".$row["course_name"]."</td><th>
                <input class='w3-radio' type='radio' name='take' value='".$row["course_id"]."'>
                           <label class='w3-validate'>Take</label>";
                
            }
            echo "</table>";
            } else {
            echo "0 results";
            }
?>           
</div>
            </form>
        
        <?php
         mysqli_close($conn);
        ?>    
        <footer class="w3-container w3-bottombar w3-bottom w3-light-grey w3-opacity">
            <p1>copy right from : online exam system <a href="www.google.com">www.google.com</a></p1>
        </footer>
        
    </body>
    
</html>
