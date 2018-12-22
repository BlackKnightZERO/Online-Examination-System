<?php include_once("connection.php"); ?>
<?php
	session_start();
	if (!isset($_SESSION['user_id'])) {
      header('Location: sign_up_log_in.php');
      exit;
  	}

?>
<?php
    $sql ="Select * FROM question";
    $result=mysqli_query($conn,$sql);
    $q_id='q_id';
    $q_desc='q_desc';
    $ans1='ans1';
    $ans2='ans2';
    $ans3='ans3';
    $ans4='ans4';
    $true_ans='true_ans';
    $difficulty='dfficulty';
    $row=mysqli_fetch_assoc($result); 
?>
<!--?php
    $ssql ="Select * FROM question";
    $count=mysqli_query($conn,$ssql);
    $c=mysqli_num_rows($count);
    $rand=rand(1,$c)-1;
    $sssql="SELECT * FROM question where id > '$rand' LIMIT 1";
    $get=mysqli_query($conn,$sssql);
            while($show=mysqli_fetch_array($get,MYSQLI_BOTH)):
            {echo $show["q_id"];}
            endwhile;
?-->

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
    background-image:url('user2.jpg');
    background-size: 100% 1000px;
    background-repeat: no-repeat;
               }
    .font {
    font-family: "Comic Sans MS", cursive, sans-serif;
    }

     </style>
    <body class="bgimg">
        <ul class="w3-navbar w3-black">
        <li><a class="w3-text-red" href="#">Home</a></li>
        <li class="w3-dropdown-hover"><a href="#">Tests<i class="fa fa-caret-down"></i></a>
            <div class="w3-dropdown-content w3-white w3-card-4">
                <a href="#">Take a test</a>
                <a href="#">Practice tests</a>
                <a href="#">F.A.Q</a>
          </div>
        </li>
            
        <li><a href="about_us.php">About Us</a></li>
        <li class="w3-right w3-teal"><a href="logout.php">Log Out</a></li>
    </ul>
        
        <div class="w3-container w3-center">
            <h1 class="w3-animate-left">Welcome User</h1>
            <h4 class="w3-animate-right font">New challage awaints you!</h4>
        </div>
        
        <div class="w3-center">
            <h1 class="w3-xxlarger">QUESTION</h1>
            <form class="w3-container" action="" method="post">
                           
                        <label class="w3-label"><b>Question description</b></label>
                        <div class="w3-panel w3-teal w3-text-black w3-round-xlarge">
                        <h4><?php echo $row[$q_desc]; ?></h4>
                        </div>
                        <div class="w3-quarter">
                            <p>.</p>
                        </div>    
                        <div class="w3-half">
                            <div class="w3-half">
                            <p>
                                <input class="w3-radio" type="radio" name="option" value="" unchecked>
                               <label class="w3-validate"><b><?php echo $row[$ans1]; ?></b></label></p>
                            <p>
                                <input class="w3-radio" type="radio" name="option" value="" unchecked>
                               <label class="w3-validate"><b><?php echo $row[$ans1]; ?></b></label></p>
                            </div>
                            <div class="w3-half">
                            <p>
                           <input class="w3-radio" type="radio" name="option" value="" unchecked>
                               <label class="w3-validate"><b><?php echo $row[$ans1]; ?></b></label></p>
                            <p>
                                <input class="w3-radio" type="radio" name="option" value="" unchecked>
                               <label class="w3-validate"><b><?php echo $row[$ans1]; ?></b></label></p>
                            </div>
                        </div>
                        <div class="w3-quarter">
                            <p>.</p>
                            </div>
                   </form>     
        </div>
        
        <div>
            <script type="text/javascript">
                function  countDown(secs,elem)
                {
                    var element=document.getElementById(elem);
                    element.innerHTML="Remaining time "+secs+" seconds";
                    element.innerHTML+="  ";
                    element.innerHTML+='<a class="w3-btn w3-round w3-black w3-text-teal" href="userhome.php">Next Question</a>'
                    if(secs<1)
                    {
                        clearTimeout(timer);
                        element.innerHTML='<h2 class="w3-text-red">Time Up!</h2>';
                        element.innerHTML+='<a href="userhome.php"><button class="w3-btn w3-teal w3-text-while">Next Question</button></a>';
                    }
                    secs--;
                    var timer= setTimeout('countDown('+secs+',"'+elem+'")',1000);
                }
            </script>
            <div id="status" class="w3-center"></div>
            <script type="text/javascript">countDown(10,"status")</script>
        </div>
        
        
        
        <?php
         mysqli_close($conn);
        ?>    
        <footer class="w3-container w3-bottombar w3-bottom w3-light-grey w3-opacity">
            <p1>copy right from : online exam system <a href="www.google.com">www.google.com</a></p1>
        </footer>
        
    </body>
    
</html>
. "<a class='w3-btn w3-text-white w3-hover-text-teal' href='test.php?id=".$row['course_id']."&name='>test myself</a></th></tr>";


<!--php
    $ssql ="Select * FROM question";
    $count=mysqli_query($conn,$ssql);
    $c=mysqli_num_rows($count);
    $rand=rand(1,$c)-1;
    $sssql="SELECT * FROM question where id > '$rand' LIMIT 1";
    $get=mysqli_query($conn,$sssql);
            while($show=mysqli_fetch_array($get,MYSQLI_BOTH)):
            {echo $show["q_id"];}
            endwhile;
?-->