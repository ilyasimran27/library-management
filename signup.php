<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>library management</title>
    <link rel="shortcut icon" href="image/i1.ico">
    <link rel="stylesheet" href="css/signstyle.css">
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

            </ul>
        </nav>
    </div>
</header>
<section>
    <div class="ban">
        <div class="overlay">
            <div class="container">
                <div class="loginhead"><h1>Please SignUp </h1></div>
                <div class="box">

					<form action="newuser.php" method="post">
                    <div class="l1"> <label for=""> Email address:</label></div>
                    <div class="inpt">

                        <input type="email" name="email" placeholder="enter your email" >
                    </div>
                    <div class="l1"> <label for=""> Password:</label></div>
                    <div class="inpt">

                        <input type="password" name="password" placeholder="enter your password">
                    </div>
                    <input class="button" type="submit" value="SignUp">
					</form>
                </div>
            </div>
        </div>
    </div>
</section>


</body>
</html>