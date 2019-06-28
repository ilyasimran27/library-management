<?php
	echo "Creating the Connection...<br /><br />";
	$connection = odbc_connect('SQLServer', '', '');
	echo "Looks Like Its Connected...<br />";
	if(!$connection){
		echo "SQL Error! No Connection!";
	}
	
	$query = "SELECT * FROM [Library].[dbo].[BOOK]";
	
	$rs = odbc_exec($connection, $query);
	
	odbc_result_all($rs, "cellpadding='3' background-color='d3d3d3'");
	
	
	$query = "SELECT  TOP 50 * FROM [Library].[dbo].[STUDENT]";
	
	$rs = odbc_exec($connection, $query);
	
	odbc_result_all($rs, "cellpadding='3' background-color='d3d3d3'");
	
	$query = "SELECT  TOP 50 * FROM [Library].[dbo].[LIBRARIAN]";
	
	$rs = odbc_exec($connection, $query);
	
	odbc_result_all($rs, "cellpadding='3' background-color='d3d3d3'");
?>