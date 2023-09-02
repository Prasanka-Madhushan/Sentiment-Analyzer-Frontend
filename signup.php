<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			$errormessage = "Please enter some valid information!";
				echo "<script type='text/javascript'>alert('$errormessage');</script>";
			
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<!--style sheet link-->
    <link rel="stylesheet" href="login.css">
    <!--fonts link-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>

	<div class="container">
			<div class="box">
				<div class="inner-box">
					<div class="box-front">
						<h2>Signup</h2>

						<form method="post">
							<input type="text" name="user_name" class="input-box" placeholder="Enter your username" required>
							<input type="password" name="password" class="input-box" placeholder="Enter your password" required>

							<input type="submit" class="submit-btn" value="Signup"><br><br>

							<div>
							<button class="sign-btn2"> 
									<a href="login.php">Click here to login </a>
								</button>
							</div>

						</form>

					</div>
				</div>
			</div>
		</div>

</body>
</html>