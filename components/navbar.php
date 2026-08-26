<?php
  $current_page = basename($_SERVER['PHP_SELF']);
?>
<!-- Skip Navigation -->
<a class="skip-link" href="#main-content">Skip to main content</a>

<!-- Topbar Start -->
<div class="container-fluid bg-dark px-0" role="complementary" aria-label="Contact information and social links">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-white">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href="https://www.facebook.com/sahajanandservices#" target="_blank" rel="noopener" aria-label="Follow us on Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href="https://www.linkedin.com/in/thakor-harshkumar/" target="_blank" rel="noopener" aria-label="Follow us on LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 topbar-right d-inline-flex align-items-center text-white py-2 px-5">
                    <span class="fs-5 fw-bold me-2"><i class="fa fa-phone-alt me-2"></i>Call Us:</span>
                    <a href="tel:+918780354331" class="fs-5 fw-bold text-white text-decoration-none" aria-label="Call Sahajanand Services at +91-8780354331">+91 - 8780354331</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5" aria-label="Main Navigation">
        <a href="index.php" class="navbar-brand ps-5 me-0" aria-label="Sahajanand Services - Home">
            <div class="d-flex flex-column align-items-end justify-content-center">
                <span class="brand-name text-white lh-1">Sahajanand</span>
                <span class="brand-sub text-white">Services</span>
            </div>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-label="Toggle navigation menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link<?php echo $current_page === 'index.php' ? ' active' : ''; ?>">Home</a>
                <a href="about.php" class="nav-item nav-link<?php echo $current_page === 'about.php' ? ' active' : ''; ?>">About</a>
                <a href="service.php" class="nav-item nav-link<?php echo $current_page === 'service.php' ? ' active' : ''; ?>">Services</a>
                <a href="industries.php" class="nav-item nav-link<?php echo $current_page === 'industries.php' ? ' active' : ''; ?>">Industries</a>
                <a href="machines.php" class="nav-item nav-link<?php echo $current_page === 'machines.php' ? ' active' : ''; ?>">Equipment</a>
                <a href="contact.php" class="nav-item nav-link<?php echo $current_page === 'contact.php' ? ' active' : ''; ?>">Contact</a>
            </div>
            <a href="contact.php" class="btn btn-primary px-3 d-none d-lg-block">Get A Quote</a>
        </div>
    </nav>
