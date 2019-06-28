<?php
	$email1=$_POST["email"];
	$password1=$_POST["password"];
	
	$connection = odbc_connect('SQLServer', '', '');
	if(!$connection){
		echo "SQL Error! No Connection!";
	}
	$id1 = rand(10000, 99999);
	echo $email1;
	echo $password1;
	$query = "INSERT INTO [Library].[dbo].[LIBRARIAN] ([lib_id],[admin_login],[admin_password]) VALUES ($id1,'$email1','$password1')";
	echo $query;
	$rs = odbc_exec($connection, $query);
	header("Location: login.php?error=&log=Now%20Login%20with%20the%20Fields%20You%20Gave%20Us");
?>