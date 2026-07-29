<?php
/**
 * SEO Head Component
 * 
 * Variables expected:
 * $pageTitle       - Page title (required)
 * $pageDescription - Meta description (required)
 * $pageUrl         - Canonical URL (required)
 * $pageType        - og:type, default 'website' (optional)
 * $pageImage       - og:image URL (optional)
 * $pageRobots      - Robots directive, default 'index, follow' (optional)
 */

$siteUrl = 'https://sahajanandservices.com';
$siteName = 'Sahajanand Services';
$defaultImage = $siteUrl . '/img/machine-installation-erection-services.jpg';

$ogType = isset($pageType) ? $pageType : 'website';
$ogImage = isset($pageImage) ? $pageImage : $defaultImage;
$robots = isset($pageRobots) ? $pageRobots : 'index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1';
?>

<!-- SEO Meta Tags -->
<meta name="robots" content="<?php echo htmlspecialchars($robots); ?>">
<link rel="canonical" href="<?php echo htmlspecialchars($pageUrl); ?>">

<!-- Open Graph Tags -->
<meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta property="og:type" content="<?php echo htmlspecialchars($ogType); ?>">
<meta property="og:url" content="<?php echo htmlspecialchars($pageUrl); ?>">
<meta property="og:image" content="<?php echo htmlspecialchars($ogImage); ?>">
<meta property="og:site_name" content="<?php echo htmlspecialchars($siteName); ?>">
<meta property="og:locale" content="en_US">

<!-- Twitter Card Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
<meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta name="twitter:image" content="<?php echo htmlspecialchars($ogImage); ?>">
