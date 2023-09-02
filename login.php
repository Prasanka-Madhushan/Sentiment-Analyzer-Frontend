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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			$message = "Wrong Username or Password!";
				echo "<script type='text/javascript'>alert('$message');</script>";
		}else
		{
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	
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
						<h2>Login</h2>

						<form method="post">
							<input type="text" name="user_name" class="input-box" placeholder="Username" required>
							<input type="password" name="password" class="input-box" placeholder="Password" required>

							<input type="submit" class="submit-btn" value="Login"><br><br>

							<div>
							<button class="sign-btn"> 
									<a href="signup.php">Signup </a>
								</button>
							</div>

						</form>

					</div>
				</div>
			</div>
		</div>

</body>
</html>