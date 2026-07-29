<?php
  // Expects $pageTitle to be set before including this component.
  $pageTitle = isset($pageTitle) ? $pageTitle : '';
?>
<section class="container-fluid page-header py-4 mb-4 wow fadeIn" data-wow-delay="0.1s" aria-label="Page Header">
    <div class="container py-4">
        <h1 class="display-4 text-white animated slideInRight"><?php echo $pageTitle; ?></h1>
        <nav aria-label="Breadcrumb">
            <ol class="breadcrumb animated slideInRight mb-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $pageTitle; ?></li>
            </ol>
        </nav>
    </div>
</section>
