<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Tour Plan - Hotel Booking</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&family=Nunito:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
    <header class="navbar navbar--mobile--fixed">
        <div class="container">
            <div class="navbar-top">
                <a href="index.html" class="logo">
                    <img src="img/horizontal-logo.svg" alt="Logo: Best Tour Plan" class="logo__image">
                </a>
                <form action="#" class="search navbar__search navbar__search--mobile--hidden">
                    <input type="text" class="search__input" placeholder="Search Location">
                    <button class="search__button"><img src="img/search.svg" alt="Icon: Search"></button>
                </form>
                <a href="#" class="user navbar__user navbar__user--mobile--hidden">
                    <img src="img/user_avatar.jpg" alt="Avatar: Nathan" class="user__avatar">
                    <span class="user__name">Nathan</span>
                </a>
                <!-- /.user -->
                <button class="menu-button navbar-top__menu-button">
                    <span class="menu-button__line"></span>
                    <span class="menu-button__line"></span>
                    <span class="menu-button__line"></span>
                </button>
            </div>
            <!-- /.navbar-top -->
            <!-- /.navbar-menu -->
        </div>
        <!-- /.container -->
        <div class="navbar-bottom">
            <div class="container">
                <ul class="navbar-menu">
                    <li class="navbar-menu__item navbar-menu__item--mobile--visible">
                        <a href="#" class="user navbar__user navbar__user--mobile--visible">
                            <img src="img/user_avatar.jpg" alt="Avatar: Nathan" class="user__avatar">
                            <span class="user__name user__name--light">Nathan</span>
                        </a>
                    </li>
                    <li class="navbar-menu__item navbar-menu__item--mobile--visible">
                        <form action="#" class="search navbar__search navbar__search--mobile--visible">
                            <input type="text" class="search__input" placeholder="Search Location">
                            <button class="search__button"><img src="img/search.svg" alt="Icon: Search"></button>
                        </form>
                    </li>
                    <li class="navbar-menu__item"><a href="#" class="navbar-menu__link">All Deals</a></li>
                    <li class="navbar-menu__item"><a href="#" class="navbar-menu__link">Hotels</a></li>
                    <li class="navbar-menu__item"><a href="#" class="navbar-menu__link">Activities</a></li>
                    <li class="navbar-menu__item"><a href="#" class="navbar-menu__link">Hotel Day Packages</a></li>
                    <li class="navbar-menu__item"><a href="#" class="navbar-menu__link">Restaurants</a></li>
                    <li class="navbar-menu__item"><a href="#" class="navbar-menu__link">Events</a></li>
                    <li class="navbar-menu__item"><a href="#" class="navbar-menu__link">Rodrigues</a></li>
                </ul>    
            </div>
        </div>
    </header>
    <nav class="breadcrumb">
        <div class="container">
            <ul class="breadcrumb-list">
                <li class="breadcrumb-list__item">
                    <a href="#" class="breadcrumb-list__link">Home</a>
                </li>
                <li class="breadcrumb-list__item">
                    <a href="#" class="breadcrumb-list__link">Flash Offers</a>
                </li>
                <li class="breadcrumb-list__item">
                    Grand Hilton Hotel
                </li>
            </ul>    
        </div>
    </nav>
    <!-- /.breadcrumb -->
    <section class="hotel">
        <div class="container">
            <div class="hotel-info">
                <div class="hotel-info__text">
                    <div class="hotel-wrapper">
                        <h1 class="hotel-name hotel-info__name"><?php echo $thnks_txt;?></h1>
                    </div>
                    <p class="hotel-description hotel-info__description">
                        <?php echo $thnks_more_txt;?>
                    </p>    
                </div>
                <!-- /.hotel-info__text -->
            </div>
            <!-- /.hotel-info -->
        </div>
    </section>
    <!-- /.hotel -->
    <footer class="footer">
        <div class="container">
            <div class="footer-wrapper">
                <div class="footer__logo-wrapper">
                    <a href="#">
                        <img src="img/vertical-logo.svg" alt="Logo: Best Tour Plan" class="logo footer__logo">
                    </a>
                </div>
                <div class="footer__list footer__categories">
                    <h3 class="footer__title">ALL CATEGORIES</h3>
                    <ul class="footer__ul">
                        <li class="footer__item"><a href="#" class="footer__link">All Deals</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Hotels</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Activities</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Spa Packages</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Hotel Day Packages</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Restaurants</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Fitness</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Rodrigues</a></li>
                    </ul>
                </div>
                <div class="footer__list footer__additional">
                    <h3 class="footer__title">ADDITIONAL INFORMATION</h3>
                    <ul class="footer__ul">
                        <li class="footer__item"><a href="#" class="footer__link">About Us</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Contact Us</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">How does it work?</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Frequently Asked Questions</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Deals.mu loyalty program</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Promote your Business on BTP</a></li>
                    </ul>
                </div>
                <div class="footer__social-network">
                    <h3 class="footer__title footer__title--inline">Social Network</h3>
                    <div class="footer__social-links">
                        <a href="#" class="footer__link">
                            <img src="img/facebook.svg" alt="Icon: facebook">
                        </a>
                        <a href="#" class="footer__link">
                            <img src="img/youtube.svg" alt="Icon: youtube">
                        </a>
                        <a href="#" class="footer__link">
                            <img src="img/instagram.svg" alt="Icon: instagram">
                        </a>
                    </div>
                </div>
                <div class="footer__list footer__legal">
                    <h3 class="footer__title">LEGAL INFORMATION</h3>
                    <ul class="footer__ul">
                        <li class="footer__item"><a href="#" class="footer__link">Terms & Conditions</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Disclaimer</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Cancellation policy</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Privacy</a></li>
                    </ul>
                </div>
                <div class="footer__contact-details">
                    <h3 class="footer__title footer__title--mb-3">Contact Details</h3>
                    <p class="footer__text">
                        Feel free to contact us by phone, email or by our contact form
                    </p>
                    <ul class="footer__ul">
                        <li class="footer__item footer__item--mb-2">
                            <div class="footer__icon-wrapper">
                                <img src="img/map-marker.svg" alt="icon: map" class="footer__icon">
                            </div>
                            9748 Blossom Hill Rd undefined Lansing, Idaho 68545 United States
                        </li>
                        <li class="footer__item footer__item--mb-2">
                            <div class="footer__icon-wrapper">
                                <img src="img/phone_call.svg" alt="icon: phone_call" class="footer__icon">
                            </div>
                            <div class="footer__contact-wrapper">
                                Tel (business hours) : <a href="tel:2691500" class="footer__link">269 1500</a><br>
                                Tel (hotline) Monday - Saturday: <a href="tel:52566138" class="footer__link">52-56-61-38</a> (08:00 am ??? 20:00 pm)<br>
                                Tel (hotline) Sunday: <a href="tel:52566138" class="footer__link">52-56-61-38</a> (08:00 am ??? 14:00 pm)<br>            
                                </div>
                        </li>
                        <li class="footer__item footer__item--mb-2">
                            <div class="footer__icon-wrapper">
                                <img src="img/email.svg" alt="icon: email" class="footer__icon">                                
                            </div>
                            <a href="mailto:cherly.lawson@example.com" class="footer__link">cherly.lawson@example.com</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__contact-form">
                    <h3 class="footer__title footer__title--mb-3">
                        SEND US A MESSAGE
                    </h3>
                    <form action="send.php" method="POST" class="form footer__form">
                        <div class="footer__input-group">
                            <input type="text" class="input footer__input" name="name" placeholder="Your Full Name" minlength="2" required>
                        </div>
                        <div class="footer__input-group">
                            <input type="tel" class="input footer__input phone" name="phone" placeholder="Phone Number" minlength="18" required>
                        </div>
                        <textarea class="message footer__message" name="message" placeholder="Message"></textarea>
                        <button class="button footer__button" type="submit">Send</button>
                        <span class="footer__info">* Required Fields</span>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    <!-- /.footer -->
    <script src="js/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>