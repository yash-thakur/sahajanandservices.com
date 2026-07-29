<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact Us – Get a Free Quote | Sahajanand Services</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="contact sahajanand services, machinery installation quote, commissioning enquiry, material handling India" name="keywords">
    <meta content="Contact Sahajanand Services for a free machinery installation, erection &amp; commissioning quote. Call +91-8780354331 or fill out our enquiry form today." name="description">

    <?php
      $pageTitle = 'Contact Us – Get a Free Quote | Sahajanand Services';
      $pageDescription = 'Contact Sahajanand Services for a free machinery installation, erection & commissioning quote. Call +91-8780354331 or fill out our enquiry form today.';
      $pageUrl = 'https://sahajanandservices.com/contact.php';
      $pageType = 'website';
      $pageBreadcrumb = 'Contact';
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
      $pageHeaderTitle = 'Contact';
      $pageTitle = $pageHeaderTitle;
      require('components/page-header.php');
    ?>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div id="main-content">
    <?php
      require('components/contact.php');
    ?>
    </div>
    <!-- Contact End -->


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
