<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uiu_library";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

<?php
$errorMassage ="";
$succ = "";
if(isset($_POST['submit']))
{	


		if (empty($_POST['title']) || empty($_POST['author']) || empty($_POST['qty']))
		{

			$errorMassage='empty field';
			echo $errorMassage;
		}
        else
        {            
						$title = $_POST['title'];
                        $author=$_POST['author'];
                        $qty = $_POST['qty'];
			
			

			$sql = "INSERT INTO books (title, author, qty)
				VALUES ('".$title."','".$author."','".$qty."')";

				if (mysqli_query($conn, $sql)) 
					{
				     $succ = "New Book Added successfully";
					} 
				else 
				{
				    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
                    
		}
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles/w3.css">
        <title>something</title>
    </head>

<body>    
<div class="w3 container">
	<form class="w3-container" action="" method="post">
		<label class="w3-label">Book Title</label>
		<input class="w3-input" name="title" >
		<label class="w3-label">Book Author</label>
		<input class="w3-input" name="author" >
		<label class="w3-label">quantity</label>
		<input class="w3-input" name="qty" >
	<input type="submit" class="w3-btn" name="submit" value="Add book">

	</form>	



</div>
<?php
         mysqli_close($conn);
        ?> 			
</body>
</html>