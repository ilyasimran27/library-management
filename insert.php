<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>library management</title>
    <link rel="shortcut icon" href="image/i1.ico">
    <link rel="stylesheet" href="css/insert.css">
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
            <div class="loginhead"><h1>Insert OF BOOK</h1></div>
            <div class="box">

				<form action="insertion.php" method="post">
                <div class="l1"> <label for=""> Book Code*:</label></div>
                <div class="inpt">

                     <input type="number" name="code" placeholder="Enter the Book Code" >
                </div>
                <div class="l1"> <label for="">Book Name : </label></div>
                <div class="inpt">

                    <input type="text" name="name" placeholder="Enter the Book Name">
                </div>
                <div class="l1"> <label for="">Subject Code : </label></div>
                <div class="inpt">

                    <input type="text" name="subject" placeholder="Enter the Subject Code">
                </div>
                <div class="l1"> <label for="">Price : </label></div>
                <div class="inpt">

                    <input type="number" name="price" placeholder="Enter the Book Price">
                </div>
                <div class="l1"> <label for="">No. of books : </label></div>
                <div class="inpt">

                    <input type="number" name="num" placeholder="Enter No. of Books">
                </div>
                <div class="l1"> <label for="">Rack No : </label></div>
                <div class="inpt">

                    <input type="number" name="rack" placeholder="Enter the Rack No.">
                </div>
                <div class="l1"> <label for="">Date of Purchase : </label></div>
                <div class="inpt">

                    <input type="date" name="datep" placeholder="Enter the Date of Purchase">
                </div>
                <div class="l1"> <label for="">Course Type (0/1) : </label></div>
                <div class="inpt">

                    <input type="number" name="type1" placeholder="Enter the Type1">
                </div>
                <div class="l1"> <label for="">Reference Type (0/1) : </label></div>
                <div class="inpt">

                    <input type="number" name="type2" placeholder="Enter the Type2">
                </div>
                <div class="l1"> <label for="">ISBN <br> (X-XXXX-XXXXXX)* : </label></div>
                <div class="inpt">

                    <input type="text" name="isbn" placeholder="Enter the ISBN">
					
				<br><br>
                </div>
                <div class="l1"> <label for="">Edition (e.g. 1st) : </label></div>
                <div class="inpt">

                    <input type="text" name="edition" placeholder="Enter Book Edition">
                </div>
                <div class="l1"> <label for="">Subject Reference : </label></div>
                <div class="inpt">

                    <input type="text" name="ref" placeholder="Enter Subject Reference">
                </div>
                 <input class="button" type="submit" value="Insert">
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