<?php
/**
 * Service Schema Component
 * Outputs JSON-LD Service schema for each service offered.
 * Include this on the services page only.
 */

$siteUrl = 'https://sahajanandservices.com';
$siteName = 'Sahajanand Services';

$services = [
    [
        'name' => 'Machine Installation',
        'description' => 'Professional installation of plastic manufacturing machinery including injection molding, blow molding, extrusion, and printing equipment with precision alignment and setup.',
        'url' => $siteUrl . '/service.php#installation'
    ],
    [
        'name' => 'Machine Erection',
        'description' => 'Complete erection services for industrial machinery including foundation preparation, structural assembly, and mechanical fitting of heavy equipment.',
        'url' => $siteUrl . '/service.php#erection'
    ],
    [
        'name' => 'Commissioning',
        'description' => 'End-to-end commissioning of industrial equipment including testing, calibration, trial runs, and performance verification to ensure optimal operation.',
        'url' => $siteUrl . '/service.php#commissioning'
    ],
    [
        'name' => 'Material Handling',
        'description' => 'Crane and forklift hire services for safe material handling, machinery positioning, and heavy equipment movement at industrial sites.',
        'url' => $siteUrl . '/service.php#material-handling'
    ],
    [
        'name' => 'Loading & Unloading',
        'description' => 'Safe loading at source, transport coordination, and careful unloading and positioning of heavy machinery at your site by trained operators.',
        'url' => $siteUrl . '/service.php#loading-unloading'
    ],
    [
        'name' => 'Manufacturing & Construction',
        'description' => 'Factory sheds, mezzanines, structural steel erection, civil construction, and complete plant setup services.',
        'url' => $siteUrl . '/service.php#manufacturing'
    ],
    [
        'name' => 'Refurbishment',
        'description' => 'Complete refurbishment and recommissioning of used industrial equipment to restore performance at a fraction of new equipment cost.',
        'url' => $siteUrl . '/service.php#refurbishment'
    ],
    [
        'name' => 'HR Recruitment & Contract Hire',
        'description' => 'Placement of skilled engineers, technicians, and operators for industrial projects through short-term or long-term contract hire arrangements.',
        'url' => $siteUrl . '/service.php#recruitment'
    ]
];

$serviceSchemas = [];
foreach ($services as $service) {
    $serviceSchemas[] = [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => $service['name'],
        'description' => $service['description'],
        'url' => $service['url'],
        'provider' => [
            '@type' => 'Organization',
            'name' => $siteName,
            'url' => $siteUrl
        ],
        'areaServed' => [
            ['@type' => 'Place', 'name' => 'Asia Pacific'],
            ['@type' => 'Place', 'name' => 'Africa'],
            ['@type' => 'Place', 'name' => 'Europe'],
            ['@type' => 'Place', 'name' => 'Middle East'],
            ['@type' => 'Place', 'name' => 'Pan India']
        ]
    ];
}
?>

<!-- Service Schema Markup -->
<?php foreach ($serviceSchemas as $schema): ?>
<script type="application/ld+json">
<?php echo json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
<?php endforeach; ?>
