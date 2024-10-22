<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet" href="style.css">
</head>
<body>
<header>
        <nav class="navbar">
            <div class="container nav-wrapper">
                <a href="#" class="logo">Tour<span>avel</span></a>
                <div class="menu-wrapper">
                    <ul class="menu">
                        <li class="menu-item"><a href="#" class="menu-link active">Home</a></li>
                        <li class="menu-item"><a href="#services" class="menu-link">Services</a></li>
                        <li class="menu-item"><a href="#produk" class="menu-link">Pricing</a></li>
                        <li class="menu-item"><a href="#about" class="menu-link">About us</a></li>
                        <li class="menu-item"><a href="#contact" class="menu-link">Contact</a></li>
                    </ul>
                    <a href="#member" class="btn-member">Member area</a>
                </div>
                <div class="menu-toggle bx bxs-grid-alt">
                </div>
            </div>
        </nav>

        <section class="home" id="home">
            <div id="home">
            <div class="container home-wrapper">
                <div class="content-left" data-aos="fade-right">
                    <h1 class="heading">Make Your Trip Memorable Book With Tour<span>avel</span></h1>
                    <p class="subheading">We have partners with several destinations that you
                        might feel at home there, we will guide you with our best service.</p>
                    <div class="box-wrapper">
                        <div class="box">
                            <i class='bx bxs-check-square'></i>
                            <p>Plan your trip</p>
                        </div>
                        <div class="box">
                            <i class='bx bxs-check-square'></i>
                            <p>Fly with us</p>
                        </div>
                    </div>
                    <div class="form-panel">
                        <img src="assets/img/form.png" alt="">
                        <div class="title-form">
                            <p>Get the schedule</p>
                        </div>
                        <div class="form-location">
                            <i class='bx bxs-map loc'></i>
                            <div class="location">
                                <p>Location <i class='bx bx-chevron-down'></i></p>
                                <select>
                                    <option value="">Jakarta, indonesia</option>
                                    <option value="">Bali, indonesia</option>
                                    <option value="">Yogyakarta, indonesia</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-date">
                            <i class='bx bxs-calendar-alt cal'></i>
                            <div class="date">
                                <p>Date <i class='bx bx-chevron-down'></i></p>
                                <input type="date">
                            </div>
                        </div>
                        <div class="btn-search">
                            <i class='bx bx-search'></i>
                        </div>
                    </div>
                    <p class="sugestion">Popular search : Kuta beach, Raja Ampat Beach, Borobudur temple</p>
                </div>
                <div class="content-right" data-aos="fade-left">
                    <div class="img-wrapper">
                        <img src="assets/img/hero-tavel.png" alt="">
                    </div>
                </div>
                </div>

            </div>
        </section>
    </header>

    <!-- Service Start -->
    <section class="service">
        <div id="services">
        <div class="container service-wrapper">
            <div class="row1">
                <p class="label-service">What we serve</p>
                <h1 class="heading-service">Top Values For You</h1>
                <p class="subheading-service">The best service that will be with you every time</p>
            </div>
            <div class="row2" data-aos="fade-up">
                <div class="box-service">
                    <i class='bx bx-globe'></i>
                    <h3>Lot of Choises</h3>
                    <p>Total of more than 450 destinations
                        in various countries in the world
                        become partners with us</p>

                    <div class="btn-learn">
                        <a href="#">Learn More</a>
                    </div>
                </div>
                <div class="box-service">
                    <i class='bx bxs-notepad'></i>
                    <h3>Tour Guide</h3>
                    <p>There are 3 guides for each
                        destination in the place you visit</p>

                    <div class="btn-learn">
                        <a href="#">Learn More</a>
                    </div>
                </div>
                <div class="box-service">
                    <i class='bx bxs-cart-add'></i>
                    <h3>Easy Booking</h3>
                    <p>We provide all services online
                        which can be accessed easily
                        through our website</p>

                    <div class="btn-learn">
                        <a href="#">Learn More</a>
                    </div>
                </div>
                <div class="box-service">
                    <i class='bx bxs-hotel'></i>
                    <h3>Luxury Hotel</h3>
                    <p>We also provide lodging near the
                        destination where you are visiting.</p>

                    <div class="btn-learn">
                        <a href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Service End -->

    <!-- Produk start -->
    <section class="produk">
        <div id="produk">
            <div class="container produk-wrapper">
                <div class="row1">
                    <div class="title-produk" data-aos="fade-right">
                        <p class="label-produk">TOP DESTINATION</p>
                        <h1 class="heading-produk">Explore Top Destination</h1>
                    </div>
                    <div class="toggle-slider" data-aos="fade-left">
                        <i class='bx bxs-chevron-left-circle'></i>
                        <i class='bx bxs-chevron-right-circle'></i>
                    </div>
                </div>
                <div class="row2">
                    <!-- Swiper -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide card-produk">
                                <img src="assets/img/produk.png" alt="">
                                <div class="detail-produk">
                                    <div class="kategori">
                                        <p class="label-kategori">Beach</p>

                                        <p class="price">$300</p>
                                    </div>
                                    <div class="title-card">
                                        <h1>Kuta, Indonesia</h1>
                                    </div>
                                    <div class="review">
                                        <div class="star">
                                            <i class='bx bxs-star'></i> 5.0
                                        </div>
                                        <p>1.6k reviewer</p>
                                    </div>
                                    <div class="body-card">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta adipisci qui
                                            nesciunt
                                            totam
                                            vel nihil id est corporis voluptatum sunt.</p>
                                    </div>
                                    <div class="btn-produk">
                                        <a href="#">Detail</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide card-produk">
                                <img src="assets/img/produk2.png" alt="">
                                <div class="detail-produk">
                                    <div class="kategori">
                                        <p class="label-kategori">Beach</p>

                                        <p class="price">$450</p>
                                    </div>
                                    <div class="title-card">
                                        <h1>Bangkok, Thailand</h1>
                                    </div>
                                    <div class="review">
                                        <div class="star">
                                            <i class='bx bxs-star'></i> 5.0
                                        </div>
                                        <p>1.9k reviewer</p>
                                    </div>
                                    <div class="body-card">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta adipisci qui
                                            nesciunt
                                            totam
                                            vel nihil id est corporis voluptatum sunt.</p>
                                    </div>
                                    <div class="btn-produk">
                                        <a href="#">Detail</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide card-produk">
                                <img src="assets/img/produk3.png" alt="">
                                <div class="detail-produk">
                                    <div class="kategori">
                                        <p class="label-kategori">Beach</p>

                                        <p class="price">$250</p>
                                    </div>
                                    <div class="title-card">
                                        <h1>Yogyakarta, Indonesia</h1>
                                    </div>
                                    <div class="review">
                                        <div class="star">
                                            <i class='bx bxs-star'></i> 5.0
                                        </div>
                                        <p>2.5k reviewer</p>
                                    </div>
                                    <div class="body-card">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta adipisci qui
                                            nesciunt
                                            totam
                                            vel nihil id est corporis voluptatum sunt.</p>
                                    </div>
                                    <div class="btn-produk">
                                        <a href="#">Detail</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide card-produk">
                                <img src="assets/img/produk4.png" alt="">
                                <div class="detail-produk">
                                    <div class="kategori">
                                        <p class="label-kategori">Beach</p>

                                        <p class="price">$500</p>
                                    </div>
                                    <div class="title-card">
                                        <h1>Jerman, Swiss</h1>
                                    </div>
                                    <div class="review">
                                        <div class="star">
                                            <i class='bx bxs-star'></i> 5.0
                                        </div>
                                        <p>3.2k reviewer</p>
                                    </div>
                                    <div class="body-card">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta adipisci qui
                                            nesciunt
                                            totam
                                            vel nihil id est corporis voluptatum sunt.</p>
                                    </div>
                                    <div class="btn-produk">
                                        <a href="#">Detail</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide card-produk">
                                <img src="assets/img/produk5.png" alt="">
                                <div class="detail-produk">
                                    <div class="kategori">
                                        <p class="label-kategori">Beach</p>

                                        <p class="price">$650</p>
                                    </div>
                                    <div class="title-card">
                                        <h1>Capadocia, Turkey</h1>
                                    </div>
                                    <div class="review">
                                        <div class="star">
                                            <i class='bx bxs-star'></i> 5.0
                                        </div>
                                        <p>5.4k reviewer</p>
                                    </div>
                                    <div class="body-card">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta adipisci qui
                                            nesciunt
                                            totam
                                            vel nihil id est corporis voluptatum sunt.</p>
                                    </div>
                                    <div class="btn-produk">
                                        <a href="#">Detail</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide card-produk">
                                <img src="assets/img/produk6.png" alt="">
                                <div class="detail-produk">
                                    <div class="kategori">
                                        <p class="label-kategori">Beach</p>

                                        <p class="price">$300</p>
                                    </div>
                                    <div class="title-card">
                                        <h1>Las Vegas, America</h1>
                                    </div>
                                    <div class="review">
                                        <div class="star">
                                            <i class='bx bxs-star'></i> 5.0
                                        </div>
                                        <p>3.9k reviewer</p>
                                    </div>
                                    <div class="body-card">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta adipisci qui
                                            nesciunt
                                            totam
                                            vel nihil id est corporis voluptatum sunt.</p>
                                    </div>
                                    <div class="btn-produk">
                                        <a href="#">Detail</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide card-produk">
                                <img src="assets/img/produk7.png" alt="">
                                <div class="detail-produk">
                                    <div class="kategori">
                                        <p class="label-kategori">Beach</p>

                                        <p class="price">$900</p>
                                    </div>
                                    <div class="title-card">
                                        <h1>Seoul, South korea</h1>
                                    </div>
                                    <div class="review">
                                        <div class="star">
                                            <i class='bx bxs-star'></i> 5.0
                                        </div>
                                        <p>8.6k reviewer</p>
                                    </div>
                                    <div class="body-card">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta adipisci qui
                                            nesciunt
                                            totam
                                            vel nihil id est corporis voluptatum sunt.</p>
                                    </div>
                                    <div class="btn-produk">
                                        <a href="#">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Produk end -->

    <div class="banner1 container">
        <div class="content">
            <h1 class="heading">SPECIAL OFFER</h1>
            <h3>Family Weeked Package</h3>
            <p>Off up to 30%</p>
        </div>
        <div class="btn-book">
            <a href="#">Book Now</a>
        </div>
    </div>

    <!-- Statistk start -->
    <section class="statistik">
        <div id="about">
            <div class="container statistik-wrapper">
                <div class="content-img" data-aos="fade-right">
                    <img src="assets/img/statistik.png" alt="">
                </div>
                <div class="content-statis" data-aos="fade-left">
                    <p class="label-statis">OUR PERFORMANCE</p>
                    <h1 class="heading-statis">Most people are satisfied
                        with our service</h1>
                    <p class="subheading-statis">We always provide the best service to customers,
                        we will direct you from ordering tickets to the journey</p>

                    <div class="angka-wrapper">
                        <div class="box-angka">
                            <h1>20</h1>
                            <p>Years
                                Experience</p>
                        </div>
                        <div class="box-angka">
                            <h1>300++</h1>
                            <p>Destination
                                Collaboration</p>
                        </div>
                        <div class="box-angka">
                            <h1>2k++</h1>
                            <p>Customers
                                Happy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- statistik end -->

    <!-- TESTI START -->
    <section class="testi">
        <div class="container testi-wrapper">
            <div class="col-heading" data-aos="fade-right">
                <p class="label-testi">WHAT THEY SAID ?</p>
                <h1 class="heading-testi">What customers say
                    about their experience with us</h1>
                <p class="subheading-testi">They say what they feel, most of them say they are very satisfied,
                    especially satisfied because they are always guided and directed
                    to between destinations so that they are not confused, and
                    also the provision of comfortable lodging does not have
                    to pay a lot to get it all</p>
            </div>
            <div class="col-slider-testi" data-aos="fade-left">
                <!-- Swiper -->
                <div class="swiper mySwiperTesti">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide card-testi">
                            <img src="assets/img/testi.png" alt="">
                            <div class="text-testi">
                                <i class='bx bxs-quote-left'></i>
                                <p>I am very helpful with this trouravel, because we
                                    can easily get it all without having to prepare
                                    it from afar, and also the price is affordable,
                                    highly recommended.</p>
                                <i class='bx bxs-quote-right'></i>
                            </div>
                            <p class="username">by tinyleopard720</p>
                            <p class="status">Traveller</p>
                        </div>
                        <div class="swiper-slide card-testi">
                            <img src="assets/img/testi2.png" alt="">
                            <div class="text-testi">
                                <i class='bx bxs-quote-left'></i>
                                <p>I am very helpful with this trouravel, because we
                                    can easily get it all without having to prepare
                                    it from afar, and also the price is affordable,
                                    highly recommended.</p>
                                <i class='bx bxs-quote-right'></i>
                            </div>
                            <p class="username">by tinyleopard720</p>
                            <p class="status">Traveller</p>
                        </div>
                        <div class="swiper-slide card-testi">
                            <img src="assets/img/testi3.png" alt="">
                            <div class="text-testi">
                                <i class='bx bxs-quote-left'></i>
                                <p>I am very helpful with this trouravel, because we
                                    can easily get it all without having to prepare
                                    it from afar, and also the price is affordable,
                                    highly recommended.</p>
                                <i class='bx bxs-quote-right'></i>
                            </div>
                            <p class="username">by tinyleopard720</p>
                            <p class="status">Traveller</p>
                        </div>
                        <div class="swiper-slide card-testi">
                            <img src="assets/img/testi4.png" alt="">
                            <div class="text-testi">
                                <i class='bx bxs-quote-left'></i>
                                <p>I am very helpful with this trouravel, because we
                                    can easily get it all without having to prepare
                                    it from afar, and also the price is affordable,
                                    highly recommended.</p>
                                <i class='bx bxs-quote-right'></i>
                            </div>
                            <p class="username">by tinyleopard720</p>
                            <p class="status">Traveller</p>
                        </div>
                        <div class="swiper-slide card-testi">
                            <img src="assets/img/testi5.png" alt="">
                            <div class="text-testi">
                                <i class='bx bxs-quote-left'></i>
                                <p>I am very helpful with this trouravel, because we
                                    can easily get it all without having to prepare
                                    it from afar, and also the price is affordable,
                                    highly recommended.</p>
                                <i class='bx bxs-quote-right'></i>
                            </div>
                            <p class="username">by tinyleopard720</p>
                            <p class="status">Traveller</p>
                        </div>
                        <div class="swiper-slide card-testi">
                            <img src="assets/img/testi6.png" alt="">
                            <div class="text-testi">
                                <i class='bx bxs-quote-left'></i>
                                <p>I am very helpful with this trouravel, because we
                                    can easily get it all without having to prepare
                                    it from afar, and also the price is affordable,
                                    highly recommended.</p>
                                <i class='bx bxs-quote-right'></i>
                            </div>
                            <p class="username">by tinyleopard720</p>
                            <p class="status">Traveller</p>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- TESTI END -->

    <!-- Banner2 -->
    <section class="banner2">
        <div id="member">
            <div class="container banner2-wrapper">
                <div class="content-banner2">
                    <h1 class="heading">ARE YOU NEW MEMBER FOR THIS TRIP ? </h1>
                    <p class="subheading">Let's register now and get cashback</p>

                    <p class="disc">UP TO 20%</p>
                </div>
                <div class="btn-banner2">
                    <a href="#" class="btn-regis">Register</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer" id="footer">
        <div id="contact">
            <div class="container footer-wrapper">
                <div class="col-1-footer">
                    <h1 class="logo-footer">Tour<span>avel.</span></h1>
                    <p class="subheading-footer">The best service to customers is
                        our top priority in building a business</p>
                    <div class="sosmed-icon">
                        <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                        <a href="#"><i class='bx bxl-whatsapp'></i></a>
                        <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                    </div>
                    <p class="copy">&copy;Copyright 2021 All Right Reserved | Built by Mardha Mardiya</p>
                </div>
                <div class="col-2-footer">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Menu</a></li>
                    </ul>
                </div>
                <div class="col-3-footer">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#">Why Touravel ?</a></li>
                        <li><a href="#">Partners with us</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Blogs</a></li>
                    </ul>
                </div>
                <div class="col-4-footer">
                    <h3>Support</h3>
                    <ul>
                        <li><a href="#">Account</a></li>
                        <li><a href="#">Support Center</a></li>
                        <li><a href="#">Feedback</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Accessbility</a></li>
                    </ul>
                </div>
                <div class="col-5-footer">
                    <h3>Get in touch</h3>
                    <p>Questions or Feedback</p>
                    <div class="form-input">
                        <input type="text" placeholder="Type your email">
                        <a href="#" class="btn-footer">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 3000
        });
    </script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>