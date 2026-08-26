<?php
/**
 * Schema.org Structured Data Component
 * 
 * Outputs JSON-LD for:
 * - Organization
 * - LocalBusiness
 * - BreadcrumbList (dynamic based on $pageTitle and $pageUrl)
 * 
 * Variables expected:
 * $pageTitle - Current page title (for breadcrumb)
 * $pageUrl   - Current page URL (for breadcrumb)
 */

$siteUrl = 'https://sahajanandservices.com';
$siteName = 'Sahajanand Services';
$logoUrl = $siteUrl . '/img/machine-installation-erection-services.jpg';

// Organization Schema
$organization = [
    '@context' => 'https://schema.org',
    '@type' => 'Organization',
    'name' => $siteName,
    'url' => $siteUrl,
    'logo' => $logoUrl,
    'description' => 'Specialized in Installation, Erection & Commissioning of plastic machinery, material handling, loading/unloading, manufacturing, construction, refurbishment, HR recruitment & contract hire.',
    'contactPoint' => [
        '@type' => 'ContactPoint',
        'telephone' => '+91-8780354331',
        'contactType' => 'customer service',
        'email' => 'service@sahajanandservices.com',
        'areaServed' => ['Asia Pacific', 'Africa', 'Europe', 'Middle East', 'India'],
        'availableLanguage' => ['English', 'Hindi']
    ],
    'areaServed' => [
        ['@type' => 'GeoCircle', 'name' => 'Asia Pacific'],
        ['@type' => 'GeoCircle', 'name' => 'Africa'],
        ['@type' => 'GeoCircle', 'name' => 'Europe'],
        ['@type' => 'GeoCircle', 'name' => 'Middle East'],
        ['@type' => 'GeoCircle', 'name' => 'India']
    ]
];

// LocalBusiness Schema
$localBusiness = [
    '@context' => 'https://schema.org',
    '@type' => 'LocalBusiness',
    'name' => $siteName,
    'url' => $siteUrl,
    'image' => $logoUrl,
    'telephone' => '+91-8780354331',
    'email' => 'service@sahajanandservices.com',
    'description' => 'Expert installation, erection and commissioning of plastic machinery. Material handling, loading/unloading, manufacturing support, construction, refurbishment, HR recruitment and contract hire services.',
    'priceRange' => '$$',
    'openingHours' => ['Mo-Fr 09:30-17:30', 'Sa 09:30-14:00'],
    'address' => [
        '@type' => 'PostalAddress',
        'addressCountry' => 'IN'
    ],
    'serviceArea' => [
        ['@type' => 'Place', 'name' => 'Asia Pacific'],
        ['@type' => 'Place', 'name' => 'Africa'],
        ['@type' => 'Place', 'name' => 'Europe'],
        ['@type' => 'Place', 'name' => 'Middle East'],
        ['@type' => 'Place', 'name' => 'Pan India']
    ],
    'hasOfferCatalog' => [
        '@type' => 'OfferCatalog',
        'name' => 'Industrial Services',
        'itemListElement' => [
            ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Machine Installation']],
            ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Machine Erection']],
            ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Commissioning']],
            ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Material Handling']],
            ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Loading & Unloading']],
            ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Refurbishment']],
            ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'HR Recruitment & Contract Hire']]
        ]
    ]
];

// BreadcrumbList Schema
$breadcrumbItems = [
    [
        '@type' => 'ListItem',
        'position' => 1,
        'name' => 'Home',
        'item' => $siteUrl . '/'
    ]
];

// Add current page to breadcrumb if not home
if (isset($pageUrl) && $pageUrl !== $siteUrl . '/' && $pageUrl !== $siteUrl) {
    $breadcrumbItems[] = [
        '@type' => 'ListItem',
        'position' => 2,
        'name' => isset($pageBreadcrumb) ? $pageBreadcrumb : (isset($pageTitle) ? $pageTitle : ''),
        'item' => $pageUrl
    ];
}

$breadcrumb = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => $breadcrumbItems
];
?>

<!-- Organization Schema -->
<script type="application/ld+json">
<?php echo json_encode($organization, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>

<!-- LocalBusiness Schema -->
<script type="application/ld+json">
<?php echo json_encode($localBusiness, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>

<!-- BreadcrumbList Schema -->
<script type="application/ld+json">
<?php echo json_encode($breadcrumb, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
