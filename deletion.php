<?php
	$code=$_POST["code"];
	
	$connection = odbc_connect('SQLServer', '', '');
	if(!$connection){
		echo "SQL Error! No Connection!";
	}
	$query = "DELETE FROM [Library].[dbo].[BOOK] WHERE
	[book_code] = $code
	;";
	
	$rs = odbc_exec($connection, $query);
	
	header("Location: delete.php?done=Deletion%20Done");
?>