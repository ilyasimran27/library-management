<?php
	$connection = odbc_connect('SQLServer', '', '');
	if(!$connection){
		echo "SQL Error! No Connection!";
	}
							
	$query = "SELECT [book_name] FROM [Library].[dbo].[BOOK]";
							
	$rs = odbc_exec($connection, $query);
	$q = array();
	$i = 0;
	while(odbc_fetch_row($rs)){
		$q[$i] = odbc_result($rs, 'book_name');
		$i++;
	}
							
?>