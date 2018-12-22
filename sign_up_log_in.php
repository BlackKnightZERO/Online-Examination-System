<?php include_once("connection.php"); ?>
<?php
	session_start();
	if (isset($_SESSION['user_id'])) {
      header('Location: userhome.php');
      exit;
  	}
?>

<?php
$errorMassage ="";
$succ = "";
$emailErr="";
$u_id="";
if(isset($_POST['submit'])){

		if (empty($_POST['user_name']) || empty($_POST['password']) || empty($_POST['phone']) || empty($_POST['mail']) || empty($_POST['address'])){

			$errorMassage='fild is empty! ';
		}
                else{
                    
                    $mail = $_POST['mail'];
			

			if (!filter_var($mail, FILTER_VALIDATE_EMAIL))
                                {
                                $emailErr = 'Invalid email format'; 
                                }
                        else{            
			$name = $_POST['user_name'];
                        $password=$_POST['password'];
                        $phone = $_POST['phone'];
			$address = $_POST['address'];
                        $sex = $_POST['gender'];
			

			$sql = "INSERT INTO user (user_name, password, phone, mail, address,sex)
				VALUES ('".$name."','".$password."','".$phone."','".$mail."','".$address."','".$sex."')";

				if (mysqli_query($conn, $sql)) {
				     $succ = "New record created successfully";
				} else {
				    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
                        }
		}
	}
?>
<?php 
    if(isset($_POST['submit1'])){

		if (empty($_POST['user_name1']) || empty($_POST['password1'])){

			$errorMassage='fild is empty! ';
		}
                else
                {   $user_name=$_POST['user_name1'];
                    $pass = $_POST['password1'];

      			$sql = " SELECT COUNT(*) FROM user WHERE( user_name='".$user_name."' AND password='".$pass."') ";

				$qury = mysqli_query($conn, $sql);

				$result = mysqli_fetch_array($qury);
			
				if($result[0]>0)
                                {
                                        $sessionSql = " SELECT user_id,user_name,password FROM user WHERE ( user_name='".$user_name."' AND password='".$pass."') ";
					$sessionQury = mysqli_query($conn, $sessionSql);
					while($sessionResult = mysqli_fetch_array($sessionQury, MYSQLI_BOTH)){
						 $u_id = $sessionResult['user_id'];
						 $u_name = $sessionResult['user_name'];
					}
					$_SESSION['user_id'] = $u_id;
					$_SESSION['user_name'] = $u_name;
			
					header('location: userhome.php');
					exit;				
                                    }
                                    else
                                    {
                                            $errorMassage=' Invalid User Name or Password ';
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
    background-image:url('./image/exams.jpg');
    background-size: 100% 1000px;
    background-repeat: no-repeat;
}
        .mar
        {
                margin-left: 45%;
        }
     </style>
     <body class="img">
         <ul class="w3-navbar w3-black">
             <li><a class="w3-text-red" href="index.php">Home</a></li>
        <li class="w3-dropdown-hover"><a href="#">Tests<i class="fa fa-caret-down"></i></a>
            <div class="w3-dropdown-content w3-white w3-card-4">
                <a href="#">Take a test</a>
                <a href="#">Practice tests</a>
                <a href="#">F.A.Q</a>
          </div>
        </li>
        <li><a href="about_us.php">About Us</a></li>
        <li class="w3-right w3-teal"><a href="#">Sign Up/Log In</a></li>
    </ul>
         
         
         
            <div class="w3-card-4 w3-half">
              <div class="w3-container w3-teal">
                <h2>Open Free Account </h2>
              </div>
                <form class="w3-container" action="" method="post">
                        <p>     
                        <label class="w3-label"><b>User Name</b></label>
                        <input class="w3-input w3-border w3-sand" name="user_name" type="text" required></p>

                        <p>    
                        <label class="w3-label"><b>Password</b></label>
                        <input class="w3-input w3-border w3-sand" name="password" type="password" required></p>
                        <p>      
                        <label class="w3-label"><b>Phone Number</b></label>
                        <input class="w3-input w3-border w3-sand" name="phone" type="number" required=""></p>
                        <p>     
                        <label class="w3-label"><b>E-Mail</b></label>
                        <input class="w3-input w3-border w3-sand" name="mail" type="text" required=""></p>
                        <p>    
                        <label class="w3-label"><b>Address</b></label>
                        <input class="w3-input w3-border w3-sand" name="address" type="text" required></p>
                        
                        <p>
                       <input class="w3-radio" type="radio" name="gender" value="male" checked>
                           <label class="w3-validate w3-text-red">Male</label></p>
                         <p>
                            <input class="w3-radio" type="radio" name="gender" value="female">
                           <label class="w3-validate w3-text-blue">Female</label></p>


                         <div class="w3-half"> 
                             <input type="submit" class="w3-btn w3-btn-block w3-green" name="submit" value="Reginster">

                        </div>
                         
              </form>
                <h3><?php echo $errorMassage; ?></h3>
            <h3><?php echo $succ; ?></h3>
            <h3><?php echo $emailErr; ?></h3>
            </div>
            
         
            <form class="w3-container w3-card-4 w3-half" action="" method="post">
                <img src="./image/avatar.png" width="15%">
                <p>      
                <label class="w3-text-blue" ><b>User Name</b></label>
                <input class="w3-input w3-border" name="user_name1" type="text" required></p>
                <p>      
                <label class="w3-text-blue"><b>Password</b></label>
                <input class="w3-input w3-border" name="password1" type="password" required></p>
                
                   
                
                <p style="margin-left:45%">      
                    <input type="submit" class="w3-btn w3-round-xxlarge w3-ripple w3-blue" name="submit1" value="Sign In"></p>
        </form> 
        
        <?php
         mysqli_close($conn);
        ?>    
       
        <footer class="w3-container w3-bottombar w3-bottom w3-light-grey w3-opacity">
            <p1>copy right from : online exam system <a href="www.google.com">www.google.com</a></p1>
        </footer>
        
         
    </body>
    
</html>
