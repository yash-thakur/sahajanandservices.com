<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Industries Served – Packaging, Dairy &amp; More | Sahajanand</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="packaging machinery installation, dairy PET filling lines, printing lamination machines, boiler pipeline erection, industrial construction" name="keywords">
    <meta content="We install &amp; commission machinery for dairy, flexible packaging, printing, boiler, electrical &amp; construction industries. See how we serve your sector." name="description">

    <?php
      $pageTitle = 'Industries Served – Packaging, Dairy & More | Sahajanand';
      $pageDescription = 'We install & commission machinery for dairy, flexible packaging, printing, boiler, electrical & construction industries. See how we serve your sector.';
      $pageUrl = 'https://sahajanandservices.com/industries.php';
      $pageType = 'website';
      $pageBreadcrumb = 'Industries';
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
      $pageHeaderTitle = 'Industries We Serve';
      $pageTitle = $pageHeaderTitle;
      require('components/page-header.php');
    ?>
    <!-- Page Header End -->

    <!-- Industries Grid -->
    <div id="main-content">
    <?php
      require('components/industries.php');
    ?>
    </div>

    <!-- Industries Detail -->
    <section class="container-xxl py-5" aria-label="Industry Details">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-3">Dairy &amp; PET Filling Lines</h3>
                    <p>Our engineers specialise in the installation and commissioning of PET filling lines serving the dairy industry. From bottle blowing machines to complete filling and capping lines, we deliver turnkey solutions. <a href="service.php">Learn more about our installation services</a>.</p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <h3 class="mb-3">Flexible Packaging</h3>
                    <p>Blown film lines, printing presses, lamination machines, slitters and rewinders — we handle the full lifecycle from unloading and erection to final commissioning and trial runs.</p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h3 class="mb-3">Printing &amp; Lamination</h3>
                    <p>Rotogravure, flexographic and digital printing equipment installed with precision alignment, along with solvent-based and solventless lamination machines commissioned to spec.</p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                    <h3 class="mb-3">Boiler, Pipeline &amp; Utilities</h3>
                    <p>Steam boilers, compressed air lines, chilled water systems, chimney erection and industrial pipeline networks — fabricated, installed and tested on-site by our team.</p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h3 class="mb-3">Electrical &amp; Automation</h3>
                    <p>Control panel fabrication, cable tray installation, VFD and PLC wiring, and full automation integration for production lines requiring precision electrical commissioning.</p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                    <h3 class="mb-3">Construction &amp; Steel Structures</h3>
                    <p>Factory sheds, mezzanines, structural steel erection, and civil construction for new plant setups or expansions — designed, fabricated and erected end-to-end. <a href="contact.php">Contact us to discuss your project</a>.</p>
                </div>
            </div>
        </div>
    </section>

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
