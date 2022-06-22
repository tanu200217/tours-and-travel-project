<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--header-->
    <section class="header">
        <a href="home.html" class="app">travel and Tour</a>
        <nav class="nav">
            <a href="home.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="about.php">about</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="package.php">package</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="book.php">book</a>&nbsp;&nbsp;&nbsp;&nbsp;

        </nav>
       
    </section>
    <div class="heading" >
    <h1>book now</h1>
    </div>
    <!--booking-->
    <section class="booking">
        <h1 class="heading-tit">book your trip</h1>
        <form action="book-form.php" method="post" class="book-form">
          <div class="flex">
            <div class="input">
                <span>name:</span>
                <input type="text" name="name" placeholder="enter your username">
            </div>
            <div class="input">
                <span>email:</span>
                <input type="email" name="email" placeholder="enter your email">
            </div>
            <div class="input">
                <span>mobile:</span>
                <input type="number" name="mobile" placeholder="enter your mobile number">
            </div>
            <div class="input">
                <span>address:</span>
                <input type="text" name="address" placeholder="enter your address">
            </div>
            <div class="input">
                <span>where to:</span>
                <input type="text" name="location" placeholder="place you want to visit">
            </div>
            <div class="input">
                <span>How many:</span>
                <input type="number" name="guests" placeholder="how many persons">
            </div>
            <div class="input">
                <span>arrivals:</span>
                <input type="date" name="arrivals">
            </div>
            <div class="input">
                <span>leaving:</span>
                <input type="date" name="leaving">
            </div>
          </div>
          <input type="submit"value="submit"class="btn" name="submit">
        </form>
    </section>
    <!---footer-->
    <section class="footer">
        <div class="box-cont">
        <div class="box">
            <h2>links</h2>
             <a href="home.php"><i class="foot-a"></i> home</a>
             <a href="about.php"><i class="foot-a"></i> about</a>
             <a href="package.php"><i class="foot-a"></i>package</a>
             <a href="book.php"><i class="foot-a"></i>book</a>
        </div>
        <div class="box">
            <h2>Extra links</h2>
             <a href="#"><i class="foot-a"></i>ask questions</a>
             <a href="#"><i class="foot-a"></i>about us</a>
             <a href="#"><i class="foot-a"></i>privacy policy</a>
             <a href="#"><i class="foot-a"></i>term to use</a>
        </div>
        <div class="box">
            <h2>contact info</h2>
             <a href="#"><i class="foot-c"></i>+123-456-789</a>
             <a href="#"><i class="foot-c"></i>+129-950-859</a>
             <a href="#"><i class="foot-em"></i>tanu@gmail.com</a>
             <a href="#"><i class="foot-loc"></i>Ghaziabad,india</a>
        </div>
        <div class="box">
            <h2>Follow us</h2>
            <a href="#"><i class="face"></i>facebook</a>
            <a href="#"><i class="linked"></i>LinkedIn</a>
            <a href="#"><i class="insta"></i>Instagram</a>
        </div>
        </div>
        <div class="credit">designed by <span>Tanu Raj</span> | all rights reserved!</div>
    </section>
</body>
</html>