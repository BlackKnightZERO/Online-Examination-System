<?php include_once('connection.php'); ?>
<?php
	session_start();
	//if (isset($_SESSION['admin_name'])) {
      //header('Location: admin.php');
      //exit;
  	//}
?>
<?php
/*
session_start();
if(isset($_POST['submit']))
{
   
    {
        if(!empty($_POST['user']) && !empty($_POST['pass']))
        {
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            
            $query= mysqli_query($conn, "SELECT * FROM admins WHERE username='".$user."' AND hashed_password='".$pass."'");
            $numrows= mysqli_num_rows($query);
            if($numrows!=0)
            {
                while($row= mysqli_fetch_array($query))
                {
                    $username=$row['username'];
                    $password=$row['hashed_password'];
                }
                if($user == $username && $pass==$password)
                {
                    header('Location:welcomeadmin.php');
                    exit;
                }
            }
            else
            {
                echo "Invalid username or password";
            }
        }
        else
        {
            echo "Required all field";
        }
}
}
 * */
 
?>
  
<?php 
    if(isset($_POST['submit'])){

		if (empty($_POST['user_name1']) || empty($_POST['password1'])){

			$errorMassage='fild is empty! ';
		}
                else
                {   $user_name=$_POST['user_name1'];
                    $pass = $_POST['password1'];

      			$sql = " SELECT COUNT(*) FROM admins WHERE( username='".$user_name."' AND hashed_password='".$pass."') ";

				$qury = mysqli_query($conn, $sql);

				$result = mysqli_fetch_array($qury);
			
				if($result[0]>0)
                                {
                                        $asessionSql = " SELECT username,hashed_password FROM admins WHERE ( username='".$user_name."' AND hashed_password='".$pass."') ";
					$asessionQury = mysqli_query($conn, $asessionSql);
					while($sessionResult = mysqli_fetch_array($asessionQury, MYSQLI_BOTH)){
						 $a_id = $sessionResult['username'];
						// $u_name = $sessionResult['user_name'];
					}
					$_SESSION['admin_name'] = $a_id;
					//$_SESSION['user_name'] = $u_name;
			
					header('location: welcomeadmin.php');
					exit;				
                                    }
                                    else
                                    {
                                            $errorMassage=' Invalid Admin Name or Password ';
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
     <body class="img mar3">
        
         <div style="margin-left:35%">
         <form class="w3-container w3-card-4 w3-half" action="" method="post">
             <img src="./image/admin.jpg" width="15%" class="mar2">
                <p>      
                <label class="w3-text-brown" ><b>User Name</b></label>
                <input class="w3-input w3-border" name="user_name1" type="text" required></p>
                <p>      
                <label class="w3-text-brown"><b>Password</b></label>
                <input class="w3-input w3-border" name="password1" type="password" required></p>
                
                   
                
                <p style="margin-left:41%">      
                    <input type="submit" class="w3-btn w3-ripple w3-green" name="submit" value="Sign In"></p>
        </form> 
</div>
         </body>
         <?php
         mysqli_close($conn);
        ?>
         </html>