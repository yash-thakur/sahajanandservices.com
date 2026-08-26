<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Industries Served – Packaging, Dairy &amp; More | Sahajanand</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="packaging machinery installation, dairy PET filling lines, printing lamination machines, electrical automation, industrial construction" name="keywords">
    <meta content="We install &amp; commission machinery for dairy, flexible packaging, printing, electrical &amp; construction industries. See how we serve your sector." name="description">

    <?php
      $pageTitle = 'Industries Served – Packaging, Dairy & More | Sahajanand';
      $pageDescription = 'We install & commission machinery for dairy, flexible packaging, printing, electrical & construction industries. See how we serve your sector.';
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
                    <p>Installation and commissioning of complete PET filling systems — from bottle blowing through filling, capping, and labelling. Turnkey delivery for dairy and beverage producers. <a href="service.php">Learn more about our installation services</a>.</p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <h3 class="mb-3">Flexible Packaging</h3>
                    <p>Blown film extruders, printing presses, lamination machines, slitters, and rewinders — erected, aligned, and commissioned through to trial-run output verification.</p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h3 class="mb-3">Printing &amp; Lamination</h3>
                    <p>Precision-aligned rotogravure, flexographic, and digital printing equipment. Solvent-based and solventless lamination machines installed and commissioned to manufacturer specifications.</p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                    <h3 class="mb-3">Electrical &amp; Automation</h3>
                    <p>Control panel fabrication, cable tray routing, VFD and PLC wiring, and full automation integration for production lines requiring precise electrical commissioning.</p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                    <h3 class="mb-3">Construction &amp; Steel Structures</h3>
                    <p>Factory sheds, mezzanines, and structural steel erection for new plant setups or expansions — designed, fabricated, and erected as a single scope of work. <a href="contact.php">Contact us to discuss your project</a>.</p>
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
