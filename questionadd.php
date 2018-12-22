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

		if (empty($_POST['qd']) || empty($_POST['o1']) || empty($_POST['o2']) || empty($_POST['o3']) || empty($_POST['o4']) || empty($_POST['ta']) || empty($_POST['ca'])){

			$errorMassage='fild is empty! ';
                        echo $errorMassage;
		}
                
                        else
                         {            
			$qd = $_POST['qd'];
                        $o1=$_POST['o1'];
                        $o2=$_POST['o2'];
                        $o3=$_POST['o3'];
                        $o4=$_POST['o4'];
                        $ta=$_POST['ta'];
                        $ca=$_POST['ca'];
                        $diff=$_POST['diff'];
			

			$sql = "INSERT INTO question (q_desc,ans1,ans2,ans3,ans4,true_ans,difficulty,course_id)
				VALUES ('".$qd."','".$o1."','".$o2."','".$o3."','".$o4."','".$ta."','".$diff."','".$ca."')";

				if (mysqli_query($conn, $sql)) {
				     $succ = "New Question added successfully";
                                     
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
                <label class="w3-text-brown" ><b>Question Description</b></label>
                <input class="w3-input w3-border" name="qd" type="text" required></p>
                <p>      
                <label class="w3-text-brown"><b>Option 1</b></label>
                <input class="w3-input w3-border" name="o1" type="text" required></p>
                <p>      
                <label class="w3-text-brown" ><b>Option 2</b></label>
                <input class="w3-input w3-border" name="o2" type="text" required></p>
                <p>      
                <label class="w3-text-brown"><b>Option 3</b></label>
                <input class="w3-input w3-border" name="o3" type="text" required></p>
                <p>      
                <label class="w3-text-brown"><b>Option 4</b></label>
                <input class="w3-input w3-border" name="o4" type="text" required></p>
                <p>      
                <label class="w3-text-brown"><b>True Answer</b></label>
                <input class="w3-input w3-border" name="ta" type="text" required></p>
                <div style="margin-left:75%">
                <?php
                $sql = "SELECT course_id FROM course";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                echo "<table cellpadding=5px><tr><th class='w3-text-teal'> COURSE ID </th><th>.</th></tr>";
    // output data of each row
                while($row = $result->fetch_assoc()) 
                {
                
    
                    
                echo "<tr align=center class='w3-text-blue'><td>".$row["course_id"]."</td><th>
                <input class='w3-radio' type='radio' name='ca' value='".$row["course_id"]."'>
                           <label class='w3-validate'></label>";
                
            }
            echo "</table>";
            } else {
            echo "0 results";
            }
?>
                </div>         
                        <p>
                       <input class="w3-radio" type="radio" name="diff" value="1" checked>
                           <label class="w3-validate w3-text-blue">Easy</label></p>
                         <p>
                            <input class="w3-radio" type="radio" name="diff" value="2">
                           <label class="w3-validate w3-text-orange">Medium</label></p>
                         <p>
                       <input class="w3-radio" type="radio" name="diff" value="3">
                           <label class="w3-validate w3-text-red">Hard</label></p>
                         
                         
                       
                <p style="margin-left:41%">      
                    <input type="submit" class="w3-btn w3-ripple w3-green" name="submit" value="Add"></p>
        </form> 
              
              
              
               <h4 class="w3-text-green"><?php echo $succ ?></h4>
               <h4 class="w3-text-red"><?php echo $errorMassage ?></h4>
</body>
<?php
         mysqli_close($conn);
?> 
</html>