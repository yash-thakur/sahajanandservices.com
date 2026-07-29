<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Installation &amp; Commissioning Services | Sahajanand Services</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="machinery installation services, machine erection services, commissioning services, material handling, loading unloading, refurbishment" name="keywords">
    <meta content="Explore our full range of machinery installation, erection, commissioning, material handling &amp; refurbishment services. Request a free consultation today." name="description">

    <?php
      $pageTitle = 'Installation & Commissioning Services | Sahajanand Services';
      $pageDescription = 'Explore our full range of machinery installation, erection, commissioning, material handling & refurbishment services. Request a free consultation today.';
      $pageUrl = 'https://sahajanandservices.com/service.php';
      $pageType = 'website';
      $pageBreadcrumb = 'Services';
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


    <!-- Page Header Start -->
    <?php
      $pageHeaderTitle = 'Services';
      $pageTitle = $pageHeaderTitle;
      require('components/page-header.php');
    ?>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div id="main-content">
    <?php
      require('components/services.php');
    ?>
    </div>
    <!-- Service End -->


    <!-- Process Start -->
    <?php
      require('components/process.php');
    ?>
    <!-- Process End -->


    <!-- Industries Start -->
    <?php
      require('components/industries.php');
    ?>
    <!-- Industries End -->


    <!-- FAQ Start -->
    <?php
      require('components/faq.php');
    ?>
    <!-- FAQ End -->


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
    <?php require('components/service-schema.php'); ?>

</body>

</html>
