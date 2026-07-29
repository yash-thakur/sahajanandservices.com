<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FAQ – Machine Installation &amp; Services | Sahajanand</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="machine installation FAQ, erection commissioning questions, material handling queries, machinery services India" name="keywords">
    <meta content="Got questions about machinery installation, erection or material handling? Find answers to common queries about Sahajanand Services. Contact us for more." name="description">

    <?php
      $pageTitle = 'FAQ – Machine Installation & Services | Sahajanand';
      $pageDescription = 'Got questions about machinery installation, erection or material handling? Find answers to common queries about Sahajanand Services. Contact us for more.';
      $pageUrl = 'https://sahajanandservices.com/faq.php';
      $pageType = 'website';
      $pageBreadcrumb = 'FAQ';
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
      $pageHeaderTitle = 'FAQ';
      $pageTitle = $pageHeaderTitle;
      require('components/page-header.php');
    ?>
    <!-- Page Header End -->

    <!-- FAQ Start -->
    <div id="main-content">
    <?php
      require('components/faq.php');
    ?>
    </div>
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
    <?php require('components/faq-schema.php'); ?>

</body>
</html>
