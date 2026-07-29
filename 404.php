<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>404 - Page Not Found | Sahajanand Services</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="Page not found. Return to Sahajanand Services homepage." name="description">

    <?php
      $pageTitle = '404 - Page Not Found | Sahajanand Services';
      $pageDescription = 'Page not found. Return to Sahajanand Services homepage.';
      $pageUrl = 'https://sahajanandservices.com/404.php';
      $pageType = 'website';
      $pageBreadcrumb = '404';
      $pageRobots = 'noindex, follow';
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
      $pageHeaderTitle = '404 Error';
      $pageTitle = $pageHeaderTitle;
      require('components/page-header.php');
    ?>
    <!-- Page Header End -->


    <!-- 404 Start -->
    <div id="main-content">
    <?php
      require('components/error-404.php');
    ?>
    </div>
    <!-- 404 End -->


    <!-- Footer Start -->
    <?php
      require('components/footer.php');
    ?>
    <!-- Footer End -->

    <!-- Schema Markup -->
    <?php require('components/schema.php'); ?>

</body>

</html>
