<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reviews</title>

    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300;400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,200&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            background-color: #8e44ad;
            ;
        }

        .review-box {
            width: 280px;
            border: 1px solid black;
            height: 450px;
            background-color: lightgray;
            font-family: 'Inconsolata', monospace;
            font-size: 10px;
        }

        h3 {
            padding: 2px;
        }

        p {
            text-align: center;
            margin-top: 20px;
            font-size: 13px;
        }

        img {
            padding-left: 8px;
            width: 270px;
            height: 250px;
        }

        span {
            font-size: 13px;
        }

        .add {
            display: grid;
            grid-template-columns: auto;
            text-align: center;
            padding-top: 25px;
            /* padding: 15px; */
        }

        .add .item {
            font-size: large;
        }

        .add .item2 form input[type=text] {
            background-color: #8e44ad;
            width: 700px;
            height: 30px;
            color: white;
            padding: 2px;
        }

        .add .item2 form input[type=text]:focus {
            background-color:black;
            color: white;
        }

        .add .item2 form input[type=submit]{
            width: 75px;
            margin-top: 15px;
            padding: 2px;
            height: 30px;
            background-color: #8e44ad;
            color: white;
        }

        .add .item2 form input[type=submit]:hover {
            background-color: black;
            color: white;
        }

        .span span{
            font-size: large;
           
        }

        .span span h2{
            margin-bottom: 20px;
        }
    
    </style>

</head>

<body>

    <!-- header section starts -->

    <section class="header">

        <a href="home.php" class="logo">Tourism Friendly</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
            <a href="reviews.php"> reviews </a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>




    </section>
    <!-- header section ends -->

    <!-- reviews section starts -->


    <div class="add">

        <div class="item">
            <h2>Give Your Review!</h2>
        </div><br>
        <div class="item2">
            <form action="review_form.php" method="post">
                <input type="text" name="reviewtxt">
                <input type="submit" value="submit" name="send">
            </form>
        </div>

    </div>

    <br><br><br>

    <div class="span">
        <span><h2>Some best reviews are...</h2></span>
    </div>

    <div class="container">
        <div class="review-box">
            <img src="review1.jpg" alt="" align="center">
            <h3>akshay kumar</h3>
            <span>traveler</span>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem architecto error earum nulla ad cumque porro eos iste! Deserunt, reprehenderit! Culpa quidem perspiciatis perferendis, obcaecati error repellendus eum molestias repudiandae!</p>
        </div>

        <div class="review-box">
            <img src="review2.jpg" alt="">
            <h3>pooja hegde</h3>
            <span>traveler</span>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem architecto error earum nulla ad cumque porro eos iste! Deserunt, reprehenderit! Culpa quidem perspiciatis perferendis, obcaecati error repellendus eum molestias repudiandae!</p>
        </div>

        <div class="review-box">
            <img src="review3.jpg" alt="">
            <h3>kriti sanon</h3>
            <span>traveler</span>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem architecto error earum nulla ad cumque porro eos iste! Deserunt, reprehenderit! Culpa quidem perspiciatis perferendis, obcaecati error repellendus eum molestias repudiandae!</p>


        </div>

        <div class="review-box">
            <img src="review4.jpg" alt="">
            <h3>john dow</h3>
            <span>traveler</span>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem architecto error earum nulla ad cumque porro eos iste! Deserunt, reprehenderit! Culpa quidem perspiciatis perferendis, obcaecati er</p>


        </div>

        <div class="review-box">
            <img src="review6.jpg" alt="">
            <h3>virat kohli</h3>
            <span>traveler</span>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem architecto error earum nulla ad cumque porro eos iste! Deserunt, reprehenderit! Culpa quidem perspiciatis perferendis, obcaecati error repellendus eum molestias repudiandae!</p>


        </div>

        <div class="review-box">
            <img src="review5.jpg" alt="">
            <h3>ravindra jadeja</h3>
            <span>traveler</span>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem architecto error earum nulla ad cumque porro eos iste! Deserunt, reprehenderit! Culpa quidem perspiciatis perferendis, obcaecati error re</p>


        </div>

        <div class="review-box">
            <img src="review7.jpg" alt="">
            <h3>sarvaiya haresh</h3>
            <span>traveler</span>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem architecto error earum nulla ad cumque porro eos iste! Deserunt, reprehenderit! Culpa quidem perspiciatis perferendis, obcaecati error repellendus eum molestias repudiandae!</p>
        </div>

        <div class="review-box">
            <img src="review8.jpg" alt="">
            <h3>dabhi ravi</h3>
            <span>traveler</span>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem architecto error earum nulla ad cumque porro eos iste! Deserunt, reprehenderit! Culpa quidem perspiciatis perferendis, obcaecati error repellendus eum molestias repudiandae!</p>
        </div>

        <div class="review-box">
            <img src="review9.jpg" alt="">
            <h3>pratham ranpura</h3>
            <span>traveler</span>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem architecto error earum nulla ad cumque porro eos iste! Deserunt, reprehenderit! Culpa quidem perspiciatis perferendis, obcaecati error repellendus eum molestias repudiandae!</p>


        </div>

    </div>


    </div>
    <!-- reviews section ends -->

</body>

</html>