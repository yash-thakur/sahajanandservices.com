<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sahajanand Services | Plastic Machinery Installation & Commissioning Services | Expert Machine Erection</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="plastic machinery installation, machine erection, industrial equipment commissioning, injection molding setup, blow molding installation, printing machine installation, manufacturing equipment services" name="keywords">
    <meta content="Specialized installation and erection of plastic manufacturing and printing machinery. Precision-driven solutions for blow molding, and printing equipment with 98% client satisfaction." name="description">
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
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">15 Years of Working Experience</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Industrial Solution Providing Company</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInRight">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">15 Years of Working Experience</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">The Best Reliable Industry Solution</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInRight">Explore More</a>
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


    <!-- Facts Start -->
    <?php
      require('components/facts.php');
    ?>
    <!-- Facts End -->


    <!-- Features Start -->
    <?php
      require('components/features.php');
    ?>
    
    <!-- Features End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Service Start -->
    <?php
      require('components/services.php');
    ?>
    <!-- Service End -->


    <!-- Project Start -->
    <?php
      require('components/projects.php');
    ?>
    
    <!-- Project End -->


    <!-- Team Start -->
    <?php
      require('components/team.php');
    ?>
    
    <!-- Team End -->


    <!-- Testimonial Start -->
    <?php
      require('components/testimonials.php');
    ?>
    
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <?php
      require('components/footer.php');
    ?>
    <!-- Footer End -->

</body>

</html>