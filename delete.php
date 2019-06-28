<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>library management</title>
    <link rel="shortcut icon" href="image/i1.ico">
    <link rel="stylesheet" href="css/deletestyle.css">
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
                <div class="loginhead"><h1>Delete the BOOK</h1></div>
                <div class="box">

				<form action="deletion.php" method="post">
                    <div class="l1"> <label for=""> Book Code*:</label></div>
                    <div class="inpt">

                        <input type="number" name="code" placeholder="enter the book code" >
                    </div>

                    <input class="button" type="submit" value="Delete">
				</form>
				<?php	
					if($_GET != null){
						echo "<br><br>";
						echo $_GET["done"];
					}
				?>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>