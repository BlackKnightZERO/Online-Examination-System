<?php include_once("connection.php"); ?>
<?php
session_start();
$_SESSION['corrent']=0;
$_SESSION['wrong']=0;
//$_SESSION['random'];


 if (!isset($_SESSION['user_id'])) {
      header('Location: sign_up_log_in.php');
     exit;
  	}
$_SESSION['end_time']=time();

$rem=$_SESSION['end_time']-$_SESSION['start_time'];

if($rem>660)
{
	echo "Test has been terminated for cheating!";
	header('Location: sign_up_log_in.php');
    exit;
}
//660*
 
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles/w3.css">
        <title></title>
    </head>
    <style> 
        .bgimg {
    background-image:url('./image/paper3.jpg');
    background-size: 103% 1900px;
    background-repeat: no-repeat;
               }
    .font {
    font-family: "Comic Sans MS", cursive, sans-serif;
    }
    
    .mar1{
        margin-left: 5%;
    }
    .mar2{
        margin-top: 2%;
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
            <h1 class=" w3-animate-left font">Test Details...</h1>
            <img src="./image/avatar2.png" width="4%">
        </div>
        <div class="w3-container w3-half">
            <?php
            $i=1;
           // $uid=$_SESSION['user_id'];
            $teack=$_SESSION['random'];
                        $sql="SELECT * FROM question,result WHERE question.q_id=result.q_id AND result.test_id='".$_SESSION['random']."'";
                        $get=mysqli_query($conn,$sql);
                        while($show=mysqli_fetch_array($get,MYSQLI_BOTH)):
                    {
            
                        
                        echo "<h5 class='w3-panel w3-teal w3-round-xlarge'>".$i.". ".$show["q_desc"]."</h5>";
                         
                         echo $show["ans1"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans2"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans3"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans4"];
                        echo "<br>";
                       
                        echo 'true answer: ';
                        echo $show["true_ans"];
                        echo "<br>";
                       
                        echo 'user answer: ';
                        echo $show["user_answer1"];
                        echo "<br>";

                         
                          echo "<br>"; 
                        if($show["true_ans"]==$show["user_answer1"])
                        {
                            $_SESSION['corrent']=$_SESSION['corrent']+1;
                        }
                        else
                        {
                           $_SESSION['wrong']=$_SESSION['wrong']+1; 
                        }
           }
           endwhile;
            ?>
            <?php
            $i=2;
            //$uid=$_SESSION['user_id'];
           // $teack=$_SESSION['random'];
                        $sql="SELECT * FROM question,result WHERE question.q_id=result.q_iq2 AND result.test_id='".$_SESSION['random']."'";
                        $get=mysqli_query($conn,$sql);
                        while($show=mysqli_fetch_array($get,MYSQLI_BOTH)):
                    {
            
                        
                        echo "<h5 class='w3-panel w3-teal w3-round-xlarge'>".$i.". ".$show["q_desc"]."</h5>";
                         
                         echo $show["ans1"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans2"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans3"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans4"];
                        echo "<br>";
                       
                        echo 'true answer: ';
                        echo $show["true_ans"];
                        echo "<br>";
                       
                        echo 'user answer: ';
                        echo $show["user_answer2"];
                        echo "<br>";

                         
                          echo "<br>"; 
                        if($show["true_ans"]==$show["user_answer2"])
                        {
                            $_SESSION['corrent']=$_SESSION['corrent']+1;
                        }
                        else
                        {
                           $_SESSION['wrong']=$_SESSION['wrong']+1; 
                        }
           }
           endwhile;
            ?>
            <?php
            $i=3;
            //$uid=$_SESSION['user_id'];
           // $teack=$_SESSION['random'];
                        $sql="SELECT * FROM question,result WHERE question.q_id=result.q_iq3 AND result.test_id='".$_SESSION['random']."'";
                        $get=mysqli_query($conn,$sql);
                        while($show=mysqli_fetch_array($get,MYSQLI_BOTH)):
                    {
            
                        
                        echo "<h5 class='w3-panel w3-teal w3-round-xlarge'>".$i.". ".$show["q_desc"]."</h5>";
                         
                         echo $show["ans1"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans2"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans3"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans4"];
                        echo "<br>";
                       
                        echo 'true answer: ';
                        echo $show["true_ans"];
                        echo "<br>";
                       
                        echo 'user answer: ';
                        echo $show["user_answer3"];
                        echo "<br>";

                         
                          echo "<br>"; 
                        if($show["true_ans"]==$show["user_answer3"])
                        {
                            $_SESSION['corrent']=$_SESSION['corrent']+1;
                        }
                        else
                        {
                           $_SESSION['wrong']=$_SESSION['wrong']+1; 
                        }
           }
           endwhile;
            ?>
            <?php
            $i=4;
            //$uid=$_SESSION['user_id'];
           // $teack=$_SESSION['random'];
                        $sql="SELECT * FROM question,result WHERE question.q_id=result.q_iq4 AND result.test_id='".$_SESSION['random']."'";
                        $get=mysqli_query($conn,$sql);
                        while($show=mysqli_fetch_array($get,MYSQLI_BOTH)):
                    {
            
                        
                        echo "<h5 class='w3-panel w3-teal w3-round-xlarge'>".$i.". ".$show["q_desc"]."</h5>";
                         
                         echo $show["ans1"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans2"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans3"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans4"];
                        echo "<br>";
                       
                        echo 'true answer: ';
                        echo $show["true_ans"];
                        echo "<br>";
                       
                        echo 'user answer: ';
                        echo $show["user_answer4"];
                        echo "<br>";

                         
                          echo "<br>"; 
                        if($show["true_ans"]==$show["user_answer4"])
                        {
                            $_SESSION['corrent']=$_SESSION['corrent']+1;
                        }
                        else
                        {
                           $_SESSION['wrong']=$_SESSION['wrong']+1; 
                        }
           }
           endwhile;
            ?>
            <?php
            $i=5;
            //$uid=$_SESSION['user_id'];
           // $teack=$_SESSION['random'];
                        $sql="SELECT * FROM question,result WHERE question.q_id=result.q_iq5 AND result.test_id='".$_SESSION['random']."'";
                        $get=mysqli_query($conn,$sql);
                        while($show=mysqli_fetch_array($get,MYSQLI_BOTH)):
                    {
            
                        
                        echo "<h5 class='w3-panel w3-teal w3-round-xlarge'>".$i.". ".$show["q_desc"]."</h5>";
                         
                         echo $show["ans1"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans2"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans3"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans4"];
                        echo "<br>";
                       
                        echo 'true answer: ';
                        echo $show["true_ans"];
                        echo "<br>";
                       
                        echo 'user answer: ';
                        echo $show["user_answer5"];
                        echo "<br>";

                         
                          echo "<br>"; 
                        if($show["true_ans"]==$show["user_answer5"])
                        {
                            $_SESSION['corrent']=$_SESSION['corrent']+1;
                        }
                        else
                        {
                           $_SESSION['wrong']=$_SESSION['wrong']+1; 
                        }
           }
           endwhile;
            ?>
            <?php
            $i=6;
            //$uid=$_SESSION['user_id'];
           // $teack=$_SESSION['random'];
                        $sql="SELECT * FROM question,result WHERE question.q_id=result.q_iq6 AND result.test_id='".$_SESSION['random']."'";
                        $get=mysqli_query($conn,$sql);
                        while($show=mysqli_fetch_array($get,MYSQLI_BOTH)):
                    {
            
                        
                        echo "<h5 class='w3-panel w3-teal w3-round-xlarge'>".$i.". ".$show["q_desc"]."</h5>";
                         
                         echo $show["ans1"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans2"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans3"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans4"];
                        echo "<br>";
                       
                        echo 'true answer: ';
                        echo $show["true_ans"];
                        echo "<br>";
                       
                        echo 'user answer: ';
                        echo $show["user_answer6"];
                        echo "<br>";

                         
                          echo "<br>"; 
                        if($show["true_ans"]==$show["user_answer6"])
                        {
                            $_SESSION['corrent']=$_SESSION['corrent']+1;
                        }
                        else
                        {
                           $_SESSION['wrong']=$_SESSION['wrong']+1; 
                        }
           }
           endwhile;
            ?>
            <?php
            $i=7;
            //$uid=$_SESSION['user_id'];
           // $teack=$_SESSION['random'];
                        $sql="SELECT * FROM question,result WHERE question.q_id=result.q_iq7 AND result.test_id='".$_SESSION['random']."'";
                        $get=mysqli_query($conn,$sql);
                        while($show=mysqli_fetch_array($get,MYSQLI_BOTH)):
                    {
            
                        
                        echo "<h5 class='w3-panel w3-teal w3-round-xlarge'>".$i.". ".$show["q_desc"]."</h5>";
                         
                         echo $show["ans1"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans2"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans3"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans4"];
                        echo "<br>";
                       
                        echo 'true answer: ';
                        echo $show["true_ans"];
                        echo "<br>";
                       
                        echo 'user answer: ';
                        echo $show["user_answer7"];
                        echo "<br>";

                         
                          echo "<br>"; 
                        if($show["true_ans"]==$show["user_answer7"])
                        {
                            $_SESSION['corrent']=$_SESSION['corrent']+1;
                        }
                        else
                        {
                           $_SESSION['wrong']=$_SESSION['wrong']+1; 
                        }
           }
           endwhile;
            ?>
            <?php
            $i=8;
            //$uid=$_SESSION['user_id'];
           // $teack=$_SESSION['random'];
                        $sql="SELECT * FROM question,result WHERE question.q_id=result.q_iq8 AND result.test_id='".$_SESSION['random']."'";
                        $get=mysqli_query($conn,$sql);
                        while($show=mysqli_fetch_array($get,MYSQLI_BOTH)):
                    {
            
                        
                        echo "<h5 class='w3-panel w3-teal w3-round-xlarge'>".$i.". ".$show["q_desc"]."</h5>";
                         
                         echo $show["ans1"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans2"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans3"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans4"];
                        echo "<br>";
                       
                        echo 'true answer: ';
                        echo $show["true_ans"];
                        echo "<br>";
                       
                        echo 'user answer: ';
                        echo $show["user_answer8"];
                        echo "<br>";

                         
                          echo "<br>"; 
                        if($show["true_ans"]==$show["user_answer8"])
                        {
                            $_SESSION['corrent']=$_SESSION['corrent']+1;
                        }
                        else
                        {
                           $_SESSION['wrong']=$_SESSION['wrong']+1; 
                        }
           }
           endwhile;
            ?>
            <?php
            $i=9;
            //$uid=$_SESSION['user_id'];
           // $teack=$_SESSION['random'];
                        $sql="SELECT * FROM question,result WHERE question.q_id=result.q_iq9 AND result.test_id='".$_SESSION['random']."'";
                        $get=mysqli_query($conn,$sql);
                        while($show=mysqli_fetch_array($get,MYSQLI_BOTH)):
                    {
            
                        
                        echo "<h5 class='w3-panel w3-teal w3-round-xlarge'>".$i.". ".$show["q_desc"]."</h5>";
                         
                         echo $show["ans1"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans2"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans3"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans4"];
                        echo "<br>";
                       
                        echo 'true answer: ';
                        echo $show["true_ans"];
                        echo "<br>";
                       
                        echo 'user answer: ';
                        echo $show["user_answer9"];
                        echo "<br>";

                         
                          echo "<br>"; 
                        if($show["true_ans"]==$show["user_answer9"])
                        {
                            $_SESSION['corrent']=$_SESSION['corrent']+1;
                        }
                        else
                        {
                           $_SESSION['wrong']=$_SESSION['wrong']+1; 
                        }
           }
           endwhile;
            ?>
            <?php
            $i=10;
            //$uid=$_SESSION['user_id'];
           // $teack=$_SESSION['random'];
                        $sql="SELECT * FROM question,result WHERE question.q_id=result.q_iq10 AND result.test_id='".$_SESSION['random']."'";
                        $get=mysqli_query($conn,$sql);
                        while($show=mysqli_fetch_array($get,MYSQLI_BOTH)):
                    {
            
                        
                        echo "<h5 class='w3-panel w3-teal w3-round-xlarge'>".$i.". ".$show["q_desc"]."</h5>";
                         
                         echo $show["ans1"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans2"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans3"]; echo "&nbsp; &nbsp &nbsp; &nbsp";
                       
                        echo $show["ans4"];
                        echo "<br>";
                       
                        echo 'true answer: ';
                        echo $show["true_ans"];
                        echo "<br>";
                       
                        echo 'user answer: ';
                        echo $show["user_answer10"];
                        echo "<br>";

                         
                          echo "<br>"; 
                        if($show["true_ans"]==$show["user_answer10"])
                        {
                            $_SESSION['corrent']=$_SESSION['corrent']+1;
                        }
                        else
                        {
                           $_SESSION['wrong']=$_SESSION['wrong']+1; 
                        }
           }
           endwhile;
            ?>
        </div>
        <div class="w3-container w3-half">
            
            
            
            <h2 class="w3-container font"><?php echo $_SESSION['user_name']; ?></h2>
            <h4 class="w3-container font">Test ID: 
                <?php 
            $sql = "SELECT id FROM `result` ORDER BY id DESC LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) 
            {       $r=$row["id"];
                   echo $r; 
                }
            }
        ?>
            </h4>
            <h4 class="w3-container font">Test Date: <?php echo $_SESSION['date']; ?></h4>
            
            
            <h4 class="w3-container w3-panel w3-round-xlarge w3-green">
            <?php 
           echo 'correct answered :';
           echo $_SESSION['corrent'];
           echo "<br>";
           ?></h4>
            <h4 class="w3-container w3-panel w3-round-xlarge w3-red">
               <?php
           echo 'wrong answered :';
           echo $_SESSION['wrong'];
           echo "<br>";
           ?>
                
                <?php
                if($_SESSION['corrent']==0)
                {
                    $_SESSION['pb']=0;
                }
                elseif($_SESSION['corrent']==1)
                {
                    $_SESSION['pb']=10;
                }
                elseif($_SESSION['corrent']==2)
                {
                    $_SESSION['pb']=20;
                }
                elseif($_SESSION['corrent']==3)
                {
                    $_SESSION['pb']=30;
                }
                elseif($_SESSION['corrent']==4)
                {
                    $_SESSION['pb']=40;
                }
                elseif($_SESSION['corrent']==5)
                {
                    $_SESSION['pb']=50;
                }
                elseif($_SESSION['corrent']==6)
                {
                    $_SESSION['pb']=60;
                }
                elseif($_SESSION['corrent']==7)
                {
                    $_SESSION['pb']=70;
                }
                elseif($_SESSION['corrent']==8)
                {
                    $_SESSION['pb']=80;
                }
                elseif($_SESSION['corrent']==9)
                {
                    $_SESSION['pb']=90;
                }
                else
                {
                    $_SESSION['pb']=100;
                }
                ?>
                </h4>
            
                <div class="w3-progress-container">
                <div class="w3-progressbar w3-blue" style="width:<?php echo $_SESSION['pb'];?>%"></div>
                </div>
            <h3 class="w3-text-blue"><?php echo $_SESSION['pb'];?>% Mark</h3>
            
            <a class="w3-btn w3-btn-block" href="logout.php">take another test</a>
            
            
        </div>
            
       <?php
     mysqli_close($conn);
        ?>      
        
</body>
</html>

