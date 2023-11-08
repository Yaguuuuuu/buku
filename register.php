<?php 
session_start();

	include("config.php");
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

			mysqli_query($conn, $query);

			header("Location: Login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>E-Books</title>
</head>
<body>
    <div class="login">
        <h1>Register</h1>
        <form method="post">
            <input type="text" name="user_name" placeholder="Username"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <input type="submit" name="submit" value="Register">
            <p>Sudah punya akun? silahkan <a href="Login.php">Login</a></p>
        </form>
     
    </div>
</body>
</html>