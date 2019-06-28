<?php
	$code=$_POST["code"];
	$name=$_POST["name"];
	$subject=$_POST["subject"];
	$price=$_POST["price"];
	$num=$_POST["num"];
	$rack=$_POST["rack"];
	$datep=$_POST["datep"];
	$type1=$_POST["type1"];
	$type2=$_POST["type2"];
	$isbn=$_POST["isbn"];
	$edition=$_POST["edition"];
	$ref=$_POST["ref"];
	
	$connection = odbc_connect('SQLServer', '', '');
	if(!$connection){
		echo "SQL Error! No Connection!";
	}
	$query = "INSERT INTO [Library].[dbo].[BOOK] 
	([book_code],
	[book_name],
	[subject_code],
	[price],
	[no_of_books],
	[rack_no],
	[date_of_purchase],
	[type1],
	[type2],
	[isbn],
	[edition],
	[subject_reference])
	
	VALUES 
	
	($code, 
	'$name', 
	'$subject', 
	$price, 
	$num, 
	$rack, 
	'$datep', 
	$type1, 
	$type2, 
	'$isbn', 
	'$edition', 
	'$ref');";
	
	$rs = odbc_exec($connection, $query);
	
	header("Location: insert.php?done=Insertion%20Done");

?>