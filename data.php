<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="image/i1.ico">
    <link rel="stylesheet" href="css/datastyle.css">
    <title>Library Management</title>

</head>
<body>
<header>
    <div class="container">
        <div class="logo">
            <img src="image/logo2.png" alt="">
            <span class="heading">BookWorld</span>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="data.php">data</a></li>
                <li><a href="update.php">Update</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="insert.php">insert</a></li>
                <li><a href="delete.php">delete</a></li>
                <li><a href="signup.php">SignUp</a></li>


            </ul>
        </nav>
    </div>
</header>
<section>
    <div class="ban">
        <div class="overlay">
            <div class="container">
                <div class="loginhead"><h1>Information</h1></div>
                <div class="box">
                    	<?php
							$connection = odbc_connect('SQLServer', '', '');
							if(!$connection){
								echo "SQL Error! No Connection!";
							}
							
							$query = "SELECT * FROM [Library].[dbo].[BOOK]";
							
							$rs = odbc_exec($connection, $query);
							
							odbc_result_all($rs, "cellpadding=3 border=2 style=color:white");
						?>	
                </div>
            </div>
        </div>
    </div>
</section>


</body>
</html>