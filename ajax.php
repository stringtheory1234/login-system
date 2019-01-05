<?php

session_start();

$conn=mysqli_connect("localhost", "root", "", "test");

if (isset($_REQUEST['action'])) {
	switch ($_REQUEST['action']) {
		case "SendMessage":
			$msg=mysqli_real_escape_string($conn, $_REQUEST['message']);
			$user=$_SESSION['u_username'];
			$query ="INSERT INTO chat SET user='$user', message='$msg'";
		
			mysqli_query($conn, $query);

			echo 'success';

		break;


		case "getChat":

			$query ="SELECT * FROM chat";
			$result=mysqli_query($conn, $query);
			$conc='';
			while ($row=mysqli_fetch_array($result)) {
				$conc .=$row['user'].': '.$row['message'].'<br />';

			}

			echo $conc;

		break;
		
		
	}
}

?>