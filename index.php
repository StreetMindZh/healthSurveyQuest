<?php 
session_start();
//session related code
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Hotel Fit "fitness & Wellness in Harmony</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
            <!--Start Integrate Header PHP -->

            <?php include "header.php"; ?>

            <!--End Integrate Header PHP -->
            
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="img/logo_hotelfit_white.png" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Fitness & Wellness in Harmony</h1>
                <!-- Icon Divider-->
                <a href="question1.php">
    <div class="divider-custom divider-light">
        <div class="fitquest-img">
            <img src="img/fitquest.png" class="fitquest" alt="description of the image">
        </div>
        
    </div>
</a>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Click on <a style=color:antiquewhite; href="question1.php">FitQuest</a> to start free Physical Activity Survey</p>            </div>
        </header>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">Our hotel, Hotel Fit, has been run by the Jankovski family for over 100 years and is now in its 3rd generation. We are popular among people of all ages. When you come to us, you may be stressed from everyday life, have worked too much, or not spent enough time outdoors. No matter what your daily routine is, you will find relaxation and fitness here.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">Our motto, "Fitness and Wellness in Harmony," speaks for itself. You will not find a comparable offer anywhere else. In our spa & sports experience and relaxation hotel, you can relax and find something for endurance, strength, and your soul on an area of over 20,000 square meters. Bring your body and mind into harmony and face the challenges ahead with renewed energy.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">Starting our FitQuest, we tailor the perfect program for you based on your answers, including balanced nutrition, fitness, and wellness. We leave nothing to chance.</p></div>
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="question1.php">
                        <i class="fas fa-download me-2"></i>
                        Start the FitQuest
                    </a>
                </div>

                <!-- About Us Team Items-->
                <div class="row justify-content-center">
                    <!-- About Us Team Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#teamModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/zlatko_jankovski.png" alt="Picture of Zlatko Jankovski Owener of HotelFit AG" />
                        </div>
                    </div>
            </div>
            <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="teamModal1" tabindex="-1" aria-labelledby="teamModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Zlatko Jankovski Jr.</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/zlatko_jankovski.png" alt="Picture of Zlatko Jankovski Owener of HotelFit AG" />
                                    <!-- Team Modal - Text-->
                                    <p class="teamStory">"Zlatko Jankovski Junior leads the business for over 10 years now. As a breakdancer and sports enthusiast, Zlatko, in the third generation after his grandfather Michael and his father Ares, is running the Hotel Fit. Through the generations, knowledge and attitude of the past has been passed down to offer a holistic offer for health-conscious people, coming at the highest level of innovation."</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="services">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Services</h2>
                <img src="assets/img/health.png" alt="Services" class="services-image" style="display:block; margin-right: auto; margin-left: auto; margin-top: -10px; width: 40%; height: 40%;">

                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/fitness-center.png" alt="Picture of a Woman using a Fitness Machine" />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/healthy-food.png" alt="Vegetables and Fruits" />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/spa-wellness.png" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Us</h2>
                <p>Please feel free to contact us for any questions or for a personal consultation. Simply fill out the fields and we will get back to you. </p>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
        <script>
        hbspt.forms.create({
            region: "na1",
            portalId: "7955011",
            formId: "de3efe22-2bf3-4c94-9a74-48e4426fbab7"
        });
        </script>
            </div>
        </section>
       
        
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Fitness Center</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/fitness-center.png" alt="Picture of a Woman using a Fitness Machine" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">"With a fitness center spanning over 5000 square meters, you'll find all the equipment and challenges you can imagine here. Our equipment is updated every 5 years to stay current with the latest advancements. The last overall renovation was conducted in February 2022."</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Healthy Food</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/healthy-food.png" alt="Vegetables and Fruits" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">In addition to good training and recovery, nutrition is one of the most important factors for maintaining balance. Our surroundings are full of surprises. We are part of a community with many farmers and are therefore in the middle of a land of plenty when it comes to healthy eating. All products in our 2 restaurants are freshly sourced each morning. We are so connected to our environment that as our guests, you can even pick your own ingredients in 5 different farms on request.</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Spa & Wellness</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/spa-wellness.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Our spa facilities span over 5000 square meters, making it one of the most unique in Europe. Our goal is to immerse you in different worlds and that's why we have themed our landscapes accordingly. For example, when you use our Hamam, you will be completely immersed in an oriental world. The same goes for the Roman bath world. Whether you come with your family or as a couple, we have thought of everything.</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               HubSpot Form                               * *-->
        <!-- * * Activate your form at https://streetminidz.com * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        
    <!-- Start Footer Section-->
    <?php include "footer.php"; ?>
    <!-- End Footer Section-->

    </body>
</html>
