
<link rel="stylesheet" type="text/css" href="styles.css">

<?php

session_start();

?>



<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

<body class="welcome-page">
	<title>chat system</title>
	<form action="logout.php" class="logout-form" method="POST">
		<button type="submit" name="submit">Log out</button>
	</form>
	<div>
		Welcome : <?= $_SESSION['u_username'] ?>
	</div>
	<div class="chathistory"></div>
	<div class="center">
	<div class="chatbox">
		<form action="" method="POST">
			<textarea name="message" id="message"></textarea>
		</form>
	</div>
	</div>
	
<script type="text/javascript" src="js/script.js"></script>

</body>