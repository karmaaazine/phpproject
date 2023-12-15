<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<?php
	include('connection.php');
?>
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="txt" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button name="signup">Sign up</button>
					<?php
						if(isset($_POST['signup'])){
							$username = $_POST['txt'];
							$email = $_POST['email'];
							$password = $_POST['pswd'];

							$sql_signup = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')"; 
							
							if ($conn->query($sql_signup) === TRUE) {
								echo "New record created successfully";
								header('location:create.php');
							} else {
								echo "Error: " . $sql_signup . "<br>" . $conn->error;
							}
						}
					?>
				</form>
			</div>

			<div class="login">
				<form method='post'>
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button name="login">Login</button>
					<?php
						if(isset($_POST['login'])){
							$email = $_POST['email'];
							$password = $_POST['pswd'];

							$sql_login = "SELECT * FROM user WHERE email = '$email'";
    						$result = $conn->query($sql_login); 
							
							if ($result->num_rows > 0) {
								$row = $result->fetch_assoc();
								
								if($email = $row['email'] && $password == $row['password']) { 
									
									header('Location: create.php');
									
								} else {
									
									echo "Invalid email or password!";
								}
							} else {
								
								echo "User does not exist. Please sign up.";
							}
						}
					?>
				</form>
			</div>
	</div>
	
</body>
</html>