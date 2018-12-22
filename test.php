
<?php include_once("connection.php"); ?>
<?php 
session_start();
if (!isset($_SESSION['user_id'])) 
    {
      header('Location: sign_up_log_in.php');
      exit;
  	}
 if (!isset($_SESSION['course'])) 
    {
      header('Location: userhome.php');
      exit;
  	}       
        
$_SESSION['start_time']=time();
$_SESSION['random']=rand(1000, 5000);


date_default_timezone_set('Asia/Dhaka');
$_SESSION['date']= date('m/d/y h:i:s a',time());
//echo $_SESSION['date'];
    

//echo $_SESSION['start_time'];
?>
<?php
if(isset($_POST['submit'])){
    $test_id=$_SESSION['random'];
    $id = $_SESSION['user_id'];
    $datentime=$_SESSION['date'];
    
    $user_answer1="";
    $user_answer2="";
    $user_answer3="";
    $user_answer4="";
    $user_answer5="";
    $user_answer6="";
    $user_answer7="";
    $user_answer8="";
    $user_answer9="";
    $user_answer10="";
    
    
    $user_answer1 = $_POST['1'];
    $user_answer2 = $_POST['2'];  
    $user_answer3 = $_POST['3'];  
    $user_answer4 = $_POST['4'];  
    $user_answer5 = $_POST['5'];  
    $user_answer6 = $_POST['6'];  
    $user_answer7 = $_POST['7'];  
    $user_answer8 = $_POST['8'];  
    $user_answer9 = $_POST['9']; 
    $user_answer10 = $_POST['10'];
    
    $t_ans1=$_POST['50'];
    $t_ans2=$_POST['51'];
    $t_ans3=$_POST['52'];
    $t_ans4=$_POST['53'];
    $t_ans5=$_POST['54'];
    $t_ans6=$_POST['55'];
    $t_ans7=$_POST['56'];
    $t_ans8=$_POST['57'];
    $t_ans9=$_POST['58'];
    $t_ans10=$_POST['59'];
   
        $sql = "INSERT INTO result (test_id, user_id, q_id, q_iq2, q_iq3, q_iq4, q_iq5, q_iq6, q_iq7, q_iq8, q_iq9, q_iq10, user_answer1, user_answer2, user_answer3, user_answer4, user_answer5, user_answer6, user_answer7, user_answer8, user_answer9, user_answer10,time)
	VALUES ('".$test_id."','".$id."','".$t_ans1."','".$t_ans2."','".$t_ans3."','".$t_ans4."','".$t_ans5."','".$t_ans6."','".$t_ans7."','".$t_ans8."','".$t_ans9."','".$t_ans10."','".$user_answer1."','".$user_answer2."','".$user_answer3."','".$user_answer4."','".$user_answer5."','".$user_answer6."','".$user_answer7."','".$user_answer8."','".$user_answer9."','".$user_answer10."','".$datentime."')";

				if (mysqli_query($conn, $sql)) {
				     //$succ = "New record created successfully";
                                     header('Location: result.php');
                                     exit;
				} else {
				    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
    
    
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles/w3.css">
        <title></title>
    </head>
    <style> 
        .bgimg {
    background-image:url('./image/user2.jpg');
    background-size: 103% 1300px;
    background-repeat: no-repeat;
               }
    .font {
    font-family: "Comic Sans MS", cursive, sans-serif;
    }

    .mar
    {
        margin-left: 42%;
    }

     </style>
    <body class="bgimg">
        <ul class="w3-navbar w3-black">
        <li><a class="w3-text-blue" href="#"><?php echo $_SESSION['user_name'];?></a></li>
            
        <li><a href="#">Edit Profile</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">History</a></li>
        <li class="w3-right w3-teal"><a href="logout.php">Log Out</a></li>
    </ul>
    <div class="mar">
        
        <!-- SELECT id FROM `result` ORDER BY id DESC LIMIT 1 -->
        <h5>Test ID: 
            <?php 
            $sql = "SELECT id FROM `result` ORDER BY id DESC LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) 
            {       $r=$row["id"]+1;
            $_SESSION['testid']=$r;
                   echo $r; 
                }
            }
        ?>
        </h5>
        
        
    <h5 class="w3-animate-bottom">Course ID: <?php echo $_GET['id'] ; ?></h5>
    <h5 class="w3-animate-top">Difficulty: <?php echo $_GET['name']; ?></h5>
    <?php $diff=$_GET['name']; ?>
    </div>
    <form method="post">
    <div style="margin-top:10px">
            <script type="text/javascript">
                function  countDown(secs,elem)
                {
                    var element=document.getElementById(elem);
                    element.innerHTML="Remaining time "+secs+" seconds";
                    element.innerHTML+="  ";
                    //element.innerHTML+='<a class="w3-btn w3-teal w3-text-while" href="result.php">Submit answer</a>'
                    element.innerHTML+='<input type="submit" class="w3-btn w3-green" name="submit" value="Submit Answer">'
                    //element.innerHTML+='<a class="w3-btn" href="result.php">View Result</a>';
                    if(secs<1)
                    {
                        clearTimeout(timer);
                        element.innerHTML='<h2 class="w3-text-red">Time Up!</h2>';
                        //element.innerHTML+='<a href="result.php"><button class="w3-btn w3-teal w3-text-while">View Result</button></a>';
                        element.innerHTML+='<input type="submit" class="w3-btn w3-teal w3-text-while" name="submit" value="Submit Answer">';
                       // element.innerHTML+='<a class="w3-btn" href="result.php">View Result</a>';
                        
                    }
                    secs--;
                    var timer= setTimeout('countDown('+secs+',"'+elem+'")',1000);
                }
            </script>
            <div id="status" class="w3-center"></div>
            <script type="text/javascript">countDown(600,"status")</script>
        </div>
        
        
        
       <div class="w3-container">
            <?php
            $i=1;
            $a=50;
            $aka="";
            $showw="0";
            $idd=$_GET['id'];
            $dif=$_GET['name'];
        $ssql ="Select * FROM question";
        $count=mysqli_query($conn,$ssql);
        $c=mysqli_num_rows($count);
        $rand=rand(1, $c)-95;
        $sssql="SELECT * FROM question WHERE course_id='$idd' AND q_id > '$rand' AND difficulty='$dif' LIMIT 10";
        $get=mysqli_query($conn,$sssql);
        while($show=mysqli_fetch_array($get,MYSQLI_BOTH)):
            {
           // echo $show["q_id"];
            echo "<input type='hidden' name='$a' value='".$show["q_id"]."'>";
            echo "<h5 class='w3-panel w3-teal w3-round-xlarge'>".$i.". ".$show["q_desc"]."</h5>";
             //echo "<br>"; 
             echo "<input class='w3-radio' type='radio' name='$i' value='".$show["ans1"]."'>";
             echo $show["ans1"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
            echo  "<input class='w3-radio' type='radio' name='$i' value='".$show["ans2"]."'>";
            echo $show["ans2"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
            echo  "<input class='w3-radio' type='radio' name='$i' value='".$show["ans3"]."'>";
            echo $show["ans3"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
            echo  "<input class='w3-radio' type='radio' name='$i' value='".$show["ans4"]."'>";
            echo $show["ans4"];
            
             $a++;
              echo "<br>"; 
            $i++;
           }
           endwhile;
            ?>
        </div>
       
       </form>


<?php
/*
if(isset($_POST['submit'])){
    $test_id=$_SESSION['random'];
    $id = $_SESSION['user_id'];
    $datentime=$_SESSION['date'];
    
    $user_answer1 = $_POST['1'];
    $user_answer2 = $_POST['2'];  
    $user_answer3 = $_POST['3'];  
    $user_answer4 = $_POST['4'];  
    $user_answer5 = $_POST['5'];  
    $user_answer6 = $_POST['6'];  
    $user_answer7 = $_POST['7'];  
    $user_answer8 = $_POST['8'];  
    $user_answer9 = $_POST['9']; 
    $user_answer10 = $_POST['10'];
    
    $t_ans1=$_POST['50'];
    $t_ans2=$_POST['51'];
    $t_ans3=$_POST['52'];
    $t_ans4=$_POST['53'];
    $t_ans5=$_POST['54'];
    $t_ans6=$_POST['55'];
    $t_ans7=$_POST['56'];
    $t_ans8=$_POST['57'];
    $t_ans9=$_POST['58'];
    $t_ans10=$_POST['59'];
   
        $sql = "INSERT INTO result (test_id, user_id, q_id, q_iq2, q_iq3, q_iq4, q_iq5, q_iq6, q_iq7, q_iq8, q_iq9, q_iq10, user_answer1, user_answer2, user_answer3, user_answer4, user_answer5, user_answer6, user_answer7, user_answer8, user_answer9, user_answer10,time)
	VALUES ('".$test_id."','".$id."','".$t_ans1."','".$t_ans2."','".$t_ans3."','".$t_ans4."','".$t_ans5."','".$t_ans6."','".$t_ans7."','".$t_ans8."','".$t_ans9."','".$t_ans10."','".$user_answer1."','".$user_answer2."','".$user_answer3."','".$user_answer4."','".$user_answer5."','".$user_answer6."','".$user_answer7."','".$user_answer8."','".$user_answer9."','".$user_answer10."','".$datentime."')";

				if (mysqli_query($conn, $sql)) {
				     //$succ = "New record created successfully";
                                     //header('Location: result.php');
                                     exit;
				} else {
				    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
    
    
}
 
 */
?>

       
        <?php
         mysqli_close($conn);
        ?>    
        
        
    </body>
    
</html>