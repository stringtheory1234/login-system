<link rel="stylesheet" type="text/css" href="styles.css">

<?php
session_start();
$conn=mysqli_connect("localhost", "root", "", "test");

$_SESSION['messages']='';

if (isset($_POST['submit'])) {
	$email=mysqli_real_escape_string($conn, $_POST['email']);
	$pwd=mysqli_real_escape_string($conn, $_POST['password']);

	if (empty($email)||empty($pwd)) {
		$_SESSION['messages']='empty fields';
	}else{
		$sql="SELECT * FROM users WHERE email='$email'";
		$result=mysqli_query($conn, $sql);
		$resultCheck=mysqli_num_rows($result);

		if ($resultCheck<1) {
			$_SESSION['messages']='user does not exist';
		}
		if ($row=mysqli_fetch_assoc($result)) {
			$hashedPwdCheck=password_verify($pwd, $row['password']);
			if($hashedPwdCheck==false){
				$_SESSION['messages']='incorrect password';
			}else{
				$_SESSION['u_id']=$row['id'];
				$_SESSION['u_first']=$row['first'];
				$_SESSION['u_last']=$row['last'];
				$_SESSION['u_username']=$row['username'];
				$_SESSION['u_email']=$row['email'];

				header("Location: welcome.php");
			}
		}
	}

}

?>


<body style="margin: 0px; background-color: #FFF0F5">
<nav class="container">
		<div style="float: left;" class="home">
			Home
		</div>
		<form action="index.php" method="POST">
			<input type="text" name="email" placeholder="e-mail" required>
			<input type="password" name="password" placeholder="password" required>
			<button type="submit" name="submit">Log in</button>
			<button><a href="signup.php">Sign up</a></button>
			<p style="color: red;font-size: 20px;"><?= $_SESSION['messages'] ?></p>
		</form>
</nav>
<div class="body">
	home page ....
</div>
<div class="body">
	Welcome....
</div>
</body>