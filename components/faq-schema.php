<?php
/**
 * FAQ Page Schema Component
 * Outputs JSON-LD FAQPage schema for the FAQ page.
 */

$faqSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name' => 'Do you handle both new and used machines?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Yes. We install and commission new machines, and we also refurbish and recommission used equipment so it performs like new at a fraction of the cost of buying new.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'Which regions do you provide service in?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'We serve clients across Asia Pacific, Africa, Europe and the Middle East, and throughout the territories of India for crane and material handling services.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'What does the loading and unloading service include?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Our crane and forklift hire service covers safe loading at the source, transport coordination, and careful unloading and positioning at your site, all handled by trained, experienced operators.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'Can you help if we\'re buying or selling a machine?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Yes. We deal in new and used machines and can help you find the right equipment for your budget, or connect you with buyers for machines you no longer need.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'Do you provide manpower and contract hire as well?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Yes, through our HR recruitment and contract hire services we place skilled engineers and technicians on your project, whether for a short-term installation or a longer contract.'
            ]
        ]
    ]
];
?>

<!-- FAQPage Schema -->
<script type="application/ld+json">
<?php echo json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
