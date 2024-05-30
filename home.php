<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts -->

<section class="header">

    <a href="home.php" class="logo">GlobeHopper</a>

    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <a href="book.php">Book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts -->

<section class="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                <div class="content">
                    <span> Explore, Discover, Travel </span>
                    <h3> Travel around the world </h3>
                    <a href="package.php" class="btn"> Discover more </a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
                <div class="content">
                    <span> Explore, Discover, Travel </span>
                    <h3> Discover the new places </h3>
                    <a href="package.php" class="btn"> Discover more </a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
                <div class="content">
                    <span> Explore, Discover, Travel </span>
                    <h3> Make your tour worthwhile </h3>
                    <a href="package.php" class="btn"> Discover more </a>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- home section ends -->

<!-- services section starts -->

<section class="services">

    <h1 class="heading-title"> Our Services </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/icon-1.png" alt="">
            <h3>Adventure</h3>
        </div>

        <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3>Tour Guides</h3>
        </div>

        <div class="box">
            <img src="images/icon-3.png" alt="">
            <h3>Trekking</h3>
        </div>
        
        <div class="box">
            <img src="images/icon-4.png" alt="">
            <h3>Camp Fire</h3>
        </div>

        <div class="box">
            <img src="images/icon-5.png" alt="">
            <h3>Off Road</h3>
        </div>

        <div class="box">
            <img src="images/icon-6.png" alt="">
            <h3>Camping</h3>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- home about section starts -->

<section class="home-about">

    <div class="image">
        <img src="images/about-img.jpg" alt="">
    </div>

    <div class="content">
        <h3> About us </h3>
        <p> We're your guides to the world's most stunning destinations.
            GlobeHopper helps you discover new places and
            experiences with curated packages and easy bookings. Whether
            you're seeking thrilling adventures, serene escapes, or cultural
            immersions, GlobeHopper offers expert advice, detailed guides,
            and inspiring stories. Join us on a journey and make every hop an adventure! </p>
        <a href="about.php" class="btn"> Read more </a>
    </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts -->

<section class="home-packages">

    <h1 class="heading-title"> Our Packages </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/img-1.jpg" alt="">
            </div>
            <div class="content">
                <h3> SkyHigh Adventures </h3>
                <p> Experience the thrill of travel with breathtaking aerial views. </p>
                <a href="book.php" class="btn"> Book now </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img-2.jpg" alt="">
            </div>
            <div class="content">
                <h3> Forest Explorer </h3>
                <p> Embark on a journey through serene forest landscapes. </p>
                <a href="book.php" class="btn"> Book now </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img-3.jpg" alt="">
            </div>
            <div class="content">
                <h3> Bus Journey </h3>
                <p> Discover new destinations on a scenic bus tour. </p>
                <a href="book.php" class="btn"> Book now </a>
            </div>
        </div>
    
    </div>

    <div class="load-more"> <a href="package.php" class="btn"> Load more </a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts -->

<section class="home-offer">
    <div class="content">
    <h3> Upto 50% Off </h3>
        <p> Celebrate the spirit of exploration with GlobeHopper's exclusive offer: UPTO 50% OFF! Don't miss out on the chance to embark on unforgettable adventures at unbeatable prices. Book now and start your journey to extraordinary destinations. </p>
        <a href="book.php" class="btn"> Book now </a>
    </div>
</section>

<!-- home offer section ends -->





<!-- footer section stars -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Quick Links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> Package</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
        </div>

        <div class="box">
            <h3>Extra Links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> Ask questions </a>
            <a href="#"> <i class="fas fa-angle-right"></i> About us </a>
            <a href="#"> <i class="fas fa-angle-right"></i> Privacy policy </a>
            <a href="#"> <i class="fas fa-angle-right"></i> Terms of use</a>
        </div>

        <div class="box">
            <h3>Contact Info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> email_123ABC@email.com </a>
            <a href="#"> <i class="fas fa-map"></i> Dubai, United Arab Emirates </a>
        </div>

        <div class="box">
            <h3>Follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> Linkedin </a>

        </div>

    </div>

    <div class="credit"> Created by <span> Jamela Rose Alcantara </span> | All Rights Reserved </div>

</section>
<!-- footer section ends -->









<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>