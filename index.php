<?php include "selection.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Management</title>
    <link rel="shortcut icon" href="image/i1.ico">
    <link rel="stylesheet" href="css/indexstyle.css">
</head>
<body>
<script>
    function over(a)
    {
        a.style.width="60%"
    }
    function out(a)
    {
        a.style.width="40%"
    }

</script>
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
<section class="ban">
    <div class="overlay">
        <div class="container">
            <h1><span class="theme">BookWorld</span>.com   </h1>
        </div>

    </div>

</section>
<section>
    <div class="box">
        <div class="flower">
            <marquee direction="up"> <h2>StoriesWorld</h2> </marquee>
        </div>
        <div class="container">		
<div class="story"><h1>Stories Books</h1></div>
            <div class="smallbox">
                <img src="image/pic1.jpg" alt="" onmouseover="over(this)" onmouseout="out(this)">
                <h1> <?php echo $q[0];?></h1>
            </div>
            <div class="smallbox">
                <img src="image/pic2.jpg" alt="" onmouseover="over(this)" onmouseout="out(this)">
                <h1> <?php echo $q[1];?></h1>
            </div>
            <div class="smallbox">
                <img src="image/pic3.jpg" alt="" onmouseover="over(this)" onmouseout="out(this)">
                <h1> <?php echo $q[2];?></h1>
            </div>
            <div class="smallbox">
                <img src="image/pic4.jpg" alt="" onmouseover="over(this)" onmouseout="out(this)">
                <h1> <?php echo $q[3];?></h1>
            </div>
            <div class="smallbox">
                <img src="image/pic5.jpg" alt="" onmouseover="over(this)" onmouseout="out(this)">
                <h1> <?php echo $q[4];?></h1>
            </div>
            <div class="smallbox">
                <img src="image/pic6.jpg" alt="" onmouseover="over(this)" onmouseout="out(this)">
                <h1> <?php echo $q[5];?></h1>
            </div>
            <div class="smallbox">
                <img src="image/pic13.jpg" alt="" onmouseover="over(this)" onmouseout="out(this)">
                <h1> <?php echo $q[6];?></h1>
            </div>

        </div>
    </div>
</section>
<section class="ban2">
    <div class="overlay">
        <div class="container">
            <h1><span class="theme">Enjoy The World</span>   </h1>
        </div>

    </div>

</section>
<section>
    <div class="box2">
        <div class="flower">
            <marquee direction="up"> <h2>Science World</h2> </marquee>
        </div>
        <div class="container">
            <div class="story"><h1>Science Books</h1></div>
            <div class="smallbox">
                <img src="image/pic7.jpg" alt="" onmouseover="over(this)" onmouseout="out(this)">
                <h1> <?php echo $q[0];?></h1>
            </div>
            <div class="smallbox">
                <img src="image/pic8.jpg" alt="" onmouseover="over(this)" onmouseout="out(this)">
                <h1> <?php echo $q[1];?></h1>
            </div>
            <div class="smallbox">
                <img src="image/pic9.jpg" alt="" onmouseover="over(this)" onmouseout="out(this)">
                <h1> <?php echo $q[2];?></h1>
            </div>
            <div class="smallbox">
                <img src="image/pic10.jpg" alt="" onmouseover="over(this)" onmouseout="out(this)">
                <h1> <?php echo $q[3];?></h1>
            </div>
            <div class="smallbox">
                <img src="image/pic11.jpg" alt="" onmouseover="over(this)" onmouseout="out(this)">
                <h1> <?php echo $q[4];?></h1>
            </div>
            <div class="smallbox">
                <img src="image/pic12.jpg" alt="" onmouseover="over(this)" onmouseout="out(this)">
                <h1> <?php echo $q[5];?></h1>
            </div>
            <div class="smallbox">
                <img src="image/pic15.jpg" alt="" onmouseover="over(this)" onmouseout="out(this)">
                <h1> <?php echo $q[6];?></h1>
            </div>

        </div>
    </div>
</section>
<section class="ban3">
    <div class="overlay">
        <div class="container">
            <h1><span class="theme">Be Attractive</span>   </h1>
        </div>

    </div>
    </section>
<footer>
    <div class="container">
        <div class="bottomlayout">
            <p> From Karachi Pakistan</p>
            <p>&copy;All right received</p>
        </div>
    </div>
</footer>

</body>
</html>