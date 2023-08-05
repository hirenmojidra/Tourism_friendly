<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
    <style>
        .booking .book-form {
            padding: 2rem;
            background: var(--light-bg);
        }

        .booking .book-form .flex {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .booking .book-form .flex .inputBox {
            flex: 1 1 41rem;
        }

        .booking .book-form .flex .inputBox input {
            width: 100%;
            padding: 1.2rem;
            font-size: 1.6rem;
            color: #777;
            text-transform: none;
            margin-top: 1.5rem;
            border: .1rem solid var(--black);
        }

        .booking .book-form .flex .inputBox input:focus {
            background-color: #222;
            color: #fff;
        }

        .booking .book-form .flex .inputBox input:focus::placeholder {
            color: fff9;
        }

        .booking .book-form .flex .inputBox span {
            font-size: 1.5rem;
            color: #777;
        }

        .booking .book-form .btn {
            margin-top: 2rem;
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

    <div class="heading" style="background:url(slide-2.jpg)">
        <h1>book now</h1>
    </div>

    <!-- book section stars -->


    <section class="booking">
        <h1 class="heading-title">book your trip!</h1>

        <form action="book_from.php" method="post" class="book-form">

            <div class="flex">
                <div class="inputBox">
                    <span>name: </span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>
                <div class="inputBox">
                    <span>email: </span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>
                <div class="inputBox">
                    <span>Phone: </span>
                    <input type="number" placeholder="enter your mobile number" name="mno">
                </div>
                <div class="inputBox">
                    <span>Address: </span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>
                <div class="inputBox">
                    <span>Tour: </span>
                    <input type="text" placeholder="where you want to go" name="tourname">
                </div>
                <div class="inputBox">
                    <span>how many: </span>
                    <input type="number" placeholder="number of travellers" name="hmy">
                </div>
                <div class="inputBox">
                    <span>Arraival: </span>
                    <input type="date" name="arrival">
                </div>
                <div class="inputBox">
                    <span>Leaving: </span>
                    <input type="date" name="leave">
                </div>

            </div>
            <input type="submit" value="submit" class="btn" name="send">
        </form>
    </section>
















    <!-- book section ends -->










    <!-- footer section start -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
            </div>
            <div class="box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i>about us</a>
                <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
                <a href="#"><i class="fas fa-phone"></i> +111-222-3333</a>
                <a href="#"><i class="fas fa-envelope"></i> tourismfriendly@gmail.com </a>
                <a href="#"><i class="fas fa-map"></i> ahemdabad, india - 380016 </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
            </div>

        </div>

        <div class="credit"> credited by <span>mr. mojidra</span> all right reserved!</div>
    </section>


    <!-- footer section ends -->




    <!-- swiper script link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


    <!-- custom js file link -->
    <script src="script.js"></script>

</body>

</html>