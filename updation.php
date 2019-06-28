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
	$runs = false;
	$runs2 = false;
	$query = "UPDATE [Library].[dbo].[BOOK] SET ";
	$query1 = "";
	if(isset($name) && $name!=""){
		$query .= "[book_name] = '$name'";
		$runs = true;
	}
	if(isset($subject) && $subject!=""){
		$query1 = "[subject_code] = '$subject'";
		if($runs) {$runs2 = true;}
		if(!$runs){$runs = true;}
	}
	if($runs2){
		$query .= ",";
		$runs2 = false;
	}
	if($runs){
		$query .= $query1;
		$query1="";
	}
	if(isset($price) && $price!=""){
		$query1 = "[price] = $price";
		if($runs){$runs2 = true;}
		if(!$runs){$runs = true;}
	}
	if($runs2){
		$query .= ",";
		$runs2 = false;
	}
	if($runs){
		$query .= $query1;
		$query1="";
	}
	if(isset($num) && $num!=""){
		$query1 = "[no_of_books] = $num";
		if($runs){$runs2 = true;}
		if(!$runs){$runs = true;}
	}
	if($runs2){
		$query .= ",";
		$runs2 = false;
	}
	if($runs){
		$query .= $query1;
		$query1="";
	}
	if(isset($rack) && $rack!=""){
		$query1 = "[rack_no] = $rack";
		if($runs){$runs2 = true;}
		if(!$runs){$runs = true;}
	}
	if($runs2){
		$query .= ",";
		$runs2 = false;
	}
	if($runs){
		$query .= $query1;
		$query1="";
	}
	if(isset($datep) && $datep!=""){
		$query1 = "[date_of_purchase] = '$datep'";
		if($runs){$runs2 = true;}
		if(!$runs){$runs = true;}
	}
	if($runs2){
		$query .= ",";
		$runs2 = false;
	}
	if($runs){
		$query .= $query1;
		$query1="";
	}
	if(isset($type1) && $type1!=""){
		$query1 = "[type1] = $type1";
		if($runs){$runs2 = true;}
		if(!$runs){$runs = true;}
	}
	if($runs2){
		$query .= ",";
		$runs2 = false;
	}
	if($runs){
		$query .= $query1;
		$query1="";
	}
	if(isset($type2) && $type2!=""){
		$query1 = "[type2] = $type2";
		if($runs){$runs2 = true;}
		if(!$runs){$runs = true;}
	}
	if($runs2){
		$query .= ",";
		$runs2 = false;
	}
	if($runs){
		$query .= $query1;
		$query1="";
	}
	if(isset($isbn) && $isbn!=""){
		$query1 = "[isbn] = '$isbn'";
		if($runs){$runs2 = true;}
		if(!$runs){$runs = true;}
	}
	if($runs2){
		$query .= ",";
		$runs2 = false;
	}
	if($runs){
		$query .= $query1;
		$query1="";
	}
	if(isset($edition) && $edition!=""){
		$query1 = "[edition] = '$edition'";
		if($runs){$runs2 = true;}
		if(!$runs){$runs = true;}
	}
	if($runs2){
		$query .= ",";
		$runs2 = false;
	}
	if($runs){
		$query .= $query1;
		$query1="";
	}
	if(isset($ref) && $ref!=""){
		$query1 = "[subject_reference] = '$ref'";
		if($runs){$runs2 = true;}
		if(!$runs){$runs = true;}
	}
	if($runs2){
		$query .= ",";
		$runs2 = false;
	}
	if($runs){
		$query .= $query1;
		$query1="";
	}
	$query .= " WHERE [book_code] = $code;";
	
	$rs = odbc_exec($connection, $query);
	
	header("Location: update.php?done=Updation%20Done");
?>