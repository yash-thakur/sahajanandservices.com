<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Privacy Policy | Sahajanand Services</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="privacy policy, data protection, sahajanand services" name="keywords">
    <meta content="Read the Sahajanand Services privacy policy to learn how we collect, use and protect your personal data. Your privacy matters to us." name="description">

    <?php
      $pageTitle = 'Privacy Policy | Sahajanand Services';
      $pageDescription = 'Read the Sahajanand Services privacy policy to learn how we collect, use and protect your personal data. Your privacy matters to us.';
      $pageUrl = 'https://sahajanandservices.com/privacy-policy.php';
      $pageType = 'website';
      $pageBreadcrumb = 'Privacy Policy';
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
      $pageHeaderTitle = 'Privacy Policy';
      $pageTitle = $pageHeaderTitle;
      require('components/page-header.php');
    ?>
    <!-- Page Header End -->

    <main id="main-content" class="container-xxl py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <p class="text-muted mb-4">Last updated: July 2026</p>

                    <h2 class="mb-3">Information We Collect</h2>
                    <p>When you use our contact form or call us, we may collect your name, email address, phone number and details about your project enquiry. We do not collect any information automatically beyond standard web server logs (IP address, browser type, pages visited).</p>

                    <h2 class="mb-3 mt-4">How We Use Your Information</h2>
                    <p>The information you provide is used solely to respond to your enquiry, provide a quotation, or deliver our installation, erection, commissioning and material handling services. We do not sell, rent or share your data with third parties for marketing purposes.</p>

                    <h2 class="mb-3 mt-4">Data Retention</h2>
                    <p>We retain your contact information only for as long as necessary to fulfil the purpose for which it was collected, or as required by applicable law.</p>

                    <h2 class="mb-3 mt-4">Cookies</h2>
                    <p>This website does not use tracking cookies or third-party analytics. Standard session cookies may be used to maintain functionality.</p>

                    <h2 class="mb-3 mt-4">Your Rights</h2>
                    <p>You may request access to, correction of, or deletion of your personal data at any time by emailing us at <a href="mailto:service@sahajanandservices.com">service@sahajanandservices.com</a>.</p>

                    <h2 class="mb-3 mt-4">Contact</h2>
                    <p>For any privacy-related questions, reach out to us at <a href="mailto:service@sahajanandservices.com">service@sahajanandservices.com</a> or call <a href="tel:+918780354331">+91 - 8780354331</a>.</p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer Start -->
    <?php
      require('components/footer.php');
    ?>
    <!-- Footer End -->

    <!-- Schema Markup -->
    <?php require('components/schema.php'); ?>

</body>
</html>
