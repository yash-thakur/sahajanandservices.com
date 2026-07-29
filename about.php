<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About Us – 15 Years of Expertise | Sahajanand Services</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="about sahajanand services, machinery installation company, industrial commissioning experts, erection services India" name="keywords">
    <meta content="With 15+ years in machinery installation, erection &amp; commissioning, Sahajanand Services delivers across Asia Pacific, Africa &amp; Europe. Discover our story." name="description">

    <?php
      $pageTitle = 'About Us – 15 Years of Expertise | Sahajanand Services';
      $pageDescription = 'With 15+ years in machinery installation, erection & commissioning, Sahajanand Services delivers across Asia Pacific, Africa & Europe. Discover our story.';
      $pageUrl = 'https://sahajanandservices.com/about.php';
      $pageType = 'website';
      $pageBreadcrumb = 'About Us';
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
      $pageHeaderTitle = 'About Us';
      $pageTitle = $pageHeaderTitle;
      require('components/page-header.php');
    ?>
    <!-- Page Header End -->


    <!-- About Start -->
    <div id="main-content">
    <?php
      require('components/about.php');
    ?>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <?php
      require('components/facts.php');
    ?>
    <!-- Facts End -->


    <!-- Values Start -->
    <?php
      require('components/values.php');
    ?>
    <!-- Values End -->


    <!-- Process Start -->
    <?php
      require('components/process.php');
    ?>
    <!-- Process End -->


    <!-- Regions Start -->
    <?php
      require('components/regions.php');
    ?>
    <!-- Regions End -->


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