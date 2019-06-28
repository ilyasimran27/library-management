<?php
	$email1=$_POST["email"];
	$password1=$_POST["password"];
	
	$connection = odbc_connect('SQLServer', '', '');
	if(!$connection){
		echo "SQL Error! No Connection!";
	}
	
	$query = "SELECT * FROM [Library].[dbo].[LIBRARIAN] WHERE admin_login = '$email1' AND admin_password = '$password1'";
	
	$rs = odbc_exec($connection, $query);

	if(odbc_result_all($rs, "cellpadding='3' background-color='d3d3d3'") != null){
		header("Location: index.php");	
	} else {
		header("Location: login.php?error=Wrong%20Username%20or%20Password%20Please Try Again&log=");
	}
	
?>