<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Machinery Installation &amp; Commissioning | Sahajanand Services</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="plastic machinery installation, machine erection, industrial equipment commissioning, material handling services, loading unloading, manufacturing services" name="keywords">
    <meta content="Expert installation, erection &amp; commissioning of plastic machinery across Asia Pacific, Africa &amp; Europe. Get a free quote from Sahajanand Services today." name="description">

    <?php
      $pageTitle = 'Machinery Installation & Commissioning | Sahajanand Services';
      $pageDescription = 'Expert installation, erection & commissioning of plastic machinery across Asia Pacific, Africa & Europe. Get a free quote from Sahajanand Services today.';
      $pageUrl = 'https://sahajanandservices.com/';
      $pageType = 'website';
      require('components/seo-head.php');
    ?>

    <?php
      require('components/header-imports.php');
    ?>
    
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <?php
      require('components/navbar.php');
    ?>
    
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div id="main-content" class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel" aria-label="Hero image slideshow">
            <div class="carousel-inner">
                <div class="carousel-item active" role="group" aria-label="Slide 1 of 2">
                    <img class="w-100" src="img/machine-installation-erection-services.jpg" alt="Professional machine installation and erection services by Sahajanand Services" width="1920" height="700">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">15+ Years of Industrial Engineering</p>
                                    <h1 class="display-4 text-white mb-5 animated slideInRight">Machinery Installation, Erection &amp; Commissioning — Delivered Globally</h1>
                                    <a href="service.php" class="btn btn-primary py-3 px-5 animated slideInRight">Explore Our Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" role="group" aria-label="Slide 2 of 2">
                    <img class="w-100" src="img/industrial-machinery-commissioning-engineers.jpg" alt="Industrial machinery commissioning engineers performing equipment setup" width="1920" height="700" loading="lazy">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">Material Handling &amp; Project Execution</p>
                                    <p class="display-4 text-white mb-5 animated slideInRight">One Team. Loading To Commissioning.</p>
                                    <a href="contact.php" class="btn btn-primary py-3 px-5 animated slideInRight">Get a Free Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <?php
      require('components/about.php');
    ?>
    <!-- About End -->


    <!-- Service Start -->
    <?php
      require('components/services.php');
    ?>
    <!-- Service End -->


    <!-- Industries Start -->
    <?php
      require('components/industries.php');
    ?>
    <!-- Industries End -->


    <!-- Process Start -->
    <?php
      require('components/process.php');
    ?>
    <!-- Process End -->


    <!-- Features Start -->
    <?php
      require('components/features.php');
    ?>
    <!-- Features End -->


    <!-- Facts Start -->
    <?php
      require('components/facts.php');
    ?>
    <!-- Facts End -->


    <!-- CTA Banner Start -->
    <?php
      require('components/cta-banner.php');
    ?>
    <!-- CTA Banner End -->


    <!-- Footer Start -->
    <?php
      require('components/footer.php');
    ?>
    <!-- Footer End -->

    <!-- Schema Markup -->
    <?php require('components/schema.php'); ?>

</body>

</html>