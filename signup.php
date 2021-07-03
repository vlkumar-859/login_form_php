<?php 

	include 'connection.php';

	if ($_POST['submit'])
	{
		$name = $_POST['name'];
		$pass = $_POST['pass'];
		$mail = $_POST['mail'];

		$query = "select * from credentials where mail = '$mail';";

		$res = mysqli_query($conn,$query);

		if (mysqli_num_rows($res)==1)
		{
			header("location: account_existed.html");
		} else{
			
			$query = "insert into credentials values('$name','$pass','$mail')";

			$res = mysqli_query($conn,$query);

			include 'content.php';
		}
	}

 ?>

