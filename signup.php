<link rel="stylesheet" type="text/css" href="styles.css">

<?php

	session_start();

	$_SESSION['messages']='';

	if (isset($_POST['submit'])) {
		$conn=mysqli_connect("localhost", "root", "", "test");

	$first=mysqli_real_escape_string($conn, $_POST['first']);
	$last=mysqli_real_escape_string($conn, $_POST['last']);
	$email=mysqli_real_escape_string($conn, $_POST['email']);
	$username=mysqli_real_escape_string($conn, $_POST['username']);
	$pwd=mysqli_real_escape_string($conn, $_POST['password']);

	if(empty($first)|| empty($last)|| empty($email)||empty($username)||empty($pwd)){
		$_SESSION['messages']='empty';
	}else{
		if (!preg_match("/^[a-zA-Z]*$/", $first)||!preg_match("/^[a-zA-Z]*$/", $last)) {
			$_SESSION['messages']='Invalid characters in first and last name.';
		}else{
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$_SESSION['messages']='email invalid';
			}else{
				$sql="SELECT * FROM users WHERE username='$username'";
				$result=mysqli_query($conn, $sql);
				$resultCheck=mysqli_num_rows($result);

				if ($resultCheck>0) {
					$_SESSION['messages']='user already taken';
				}else{
					$hashedPwd=password_hash($pwd, PASSWORD_DEFAULT);
					$sql="INSERT INTO users (first, last, email, username, password) VALUES('$first','$last', '$email', '$username', '$hashedPwd')";
					mysqli_query($conn, $sql);
					$_SESSION['messages']='success';
				}
			}
		}
	}


	}
?>


<body style="margin: 0px; background-color: #FFF0F5">
<nav class="container">
	<div>
		<div style="float: left;" class="home">
			<a href="index.php">Home</a>
		</div>
		
	</div>
</nav>
<div>
	<p style="text-align: center; font-size: 40px;">enter details...</p>
<form  class="form" action="signup.php" method="POST">
	<input type="text" name="first" placeholder="first name" required>
	<input type="text" name="last" placeholder="last name" required>
	<input type="text" name="email" placeholder="e-mail" required>
	<input type="text" name="username" placeholder="Username" required>
	<input type="password" name="password" placeholder="Password" required>
	<button type="submit" name="submit">Submit</button>

	<?= $_SESSION['messages'] ?>
</form>
</div>
</body>