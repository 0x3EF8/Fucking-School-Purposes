<?php
// Site Configuration
define('SITE_NAME', 'NukeMart');
define('SITE_TAGLINE', 'Peace Was Never an Option.');
define('SITE_OWNER', '- Cano Jay Patrick (Nuclear Entrepreneur Extraordinaire)');
define('SITE_EMAIL', 'contact@nukemart.com');
define('SITE_YEAR', '2025');

// Base URL Configuration
define('BASE_URL', './');
define('ASSETS_URL', BASE_URL . 'assets/');
define('CSS_URL', ASSETS_URL . 'css/');
define('IMG_URL', ASSETS_URL . 'img/');

// Page Configuration
$site_pages = [
    'home' => [
        'title' => SITE_NAME . ' - Premium Nuclear Solutions',
        'file' => 'index.php'
    ],
    'about' => [
        'title' => 'About - ' . SITE_NAME,
        'file' => 'about.php'
    ],
    'contact' => [
        'title' => 'Contact - ' . SITE_NAME,
        'file' => 'contact.php'
    ]
];

// Navigation Configuration
$navigation = [
    'home' => [
        'text' => 'Home',
        'icon' => '🏠',
        'url' => 'index.php#products'
    ],
    'about' => [
        'text' => 'About',
        'icon' => 'ℹ️',
        'url' => 'about.php'
    ],
    'contact' => [
        'text' => 'Contact',
        'icon' => '📞',
        'url' => 'contact.php'
    ]
];

// Sidebar Configuration
$sidebar = [
    'title' => 'Quick Info',
    'description' => 'Premium nuclear solutions for discerning clients.',
    'contact_label' => 'Email:',
    'year_label' => 'Year:'
];

// Footer Configuration
$footer = [
    'copyright' => 'All rights reserved.',
    'social' => [
        'facebook' => [
            'text' => 'Facebook',
            'url' => '#'
        ],
        'email' => [
            'text' => 'Email',
            'url' => 'mailto:' . SITE_EMAIL
        ]
    ]
];

// Template Selector Configuration
$template_selector = [
    'title' => 'Choose Your Template',
    'subtitle' => 'Select the perfect design for your nuclear enterprise',
    'templates' => [
        'original' => [
            'name' => 'Original',
            'icon' => '⚡',
            'description' => 'Bold dark theme with striking yellow accents. Perfect for making a powerful statement.',
            'features' => [
                'Dark mode design',
                'High contrast elements',
                'Modern typography',
                'Responsive layout'
            ]
        ],
        'modern' => [
            'name' => 'Modern',
            'icon' => '🎨',
            'description' => 'Clean, professional design with blue accents. Sleek and contemporary interface.',
            'features' => [
                'Clean white background',
                'Professional blue theme',
                'Subtle shadows',
                'Modern typography'
            ]
        ],
        'minimal' => [
            'name' => 'Minimal',
            'icon' => '📝',
            'description' => 'Simple black and white design with monospace fonts. Focused and distraction-free.',
            'features' => [
                'Monospace typography',
                'Clean borders',
                'Minimal color palette',
                'High readability'
            ]
        ],
        'classic' => [
            'name' => 'Classic',
            'icon' => '🏛️',
            'description' => 'Traditional design with warm brown colors. Timeless and elegant aesthetic.',
            'features' => [
                'Warm color palette',
                'Serif typography',
                'Traditional styling',
                'Elegant borders'
            ]
        ]
    ]
];

// Ads Configuration
$ads = [
    'featured_deals' => [
        'title' => 'Featured Deals',
        'hot_offer' => [
            'badge' => 'HOT',
            'title' => 'Limited Time Offer',
            'description' => 'Get 20% off on all premium models this week only!',
            'button' => 'Shop Now'
        ]
    ],
    'special_promotions' => [
        'title' => 'Special Promotions',
        'stealth_package' => [
            'badge' => 'NEW',
            'title' => 'Stealth Package',
            'description' => 'Bundle deal: Stealth Nuke + Mini Nuke for ₱35,000,000',
            'button' => 'View Deal'
        ]
    ],
    'customer_reviews' => [
        'title' => 'Customer Reviews',
        'reviews' => [
            [
                'stars' => '⭐⭐⭐⭐⭐',
                'text' => '"Excellent quality and delivery. Highly recommended!"',
                'author' => 'Anonymous Customer'
            ],
            [
                'stars' => '⭐⭐⭐⭐⭐',
                'text' => '"Best nuclear solutions in the market. Will buy again!"',
                'author' => 'Satisfied Client'
            ]
        ]
    ],
    'newsletter' => [
        'title' => 'Newsletter',
        'description' => 'Stay updated with latest offers and new products!',
        'placeholder' => 'Enter your email',
        'button' => 'Subscribe'
    ]
];

// About Page Configuration
$about = [
    'title' => 'About ' . SITE_NAME,
    'description' => 'We are the leading provider of premium nuclear solutions for discerning clients worldwide.',
    'why_choose_us' => [
        'title' => 'Why Choose Us',
        'badge' => 'BEST',
        'title_text' => 'Premium Quality',
        'description' => 'Only the finest nuclear materials and craftsmanship.'
    ],
    'mission' => [
        'title' => 'Our Mission',
        'text' => '"To provide the highest quality nuclear solutions with unmatched reliability and precision."',
        'author' => 'Our Promise'
    ]
];

// Contact Page Configuration
$contact = [
    'title' => 'Contact Us',
    'description' => 'Get in touch with us for premium nuclear solutions.',
    'contact_info' => [
        'title' => 'Contact Info',
        'badge' => '24/7',
        'title_text' => 'Always Available',
        'description' => 'We\'re here to help you 24/7 with your nuclear needs.'
    ],
    'quick_contact' => [
        'title' => 'Quick Contact',
        'description' => 'Send us a message for immediate assistance!',
        'placeholder' => 'Your email',
        'button' => 'Send Message'
    ]
];

// Products Configuration
$products = [
    [
        'id' => 'basic-nuke',
        'name' => 'Basic Nuke',
        'description' => 'Entry-level tactical device. Perfect for beginners who want to make a statement.',
        'price' => '₱5,500,000',
        'image' => 'N.jpg'
    ],
    [
        'id' => 'pro-nuke', 
        'name' => 'Pro Nuke',
        'description' => 'Mid-range device with enhanced blast radius. Great for experienced users.',
        'price' => '₱16,500,000',
        'image' => 'U.jpg'
    ],
    [
        'id' => 'stealth-nuke',
        'name' => 'Stealth Nuke', 
        'description' => 'Undetectable design with premium features. Perfect for surprise occasions.',
        'price' => '₱33,000,000',
        'image' => 'K.jpg'
    ],
    [
        'id' => 'mini-nuke',
        'name' => 'Mini Nuke',
        'description' => 'Compact size with maximum impact. Portable and travel-friendly design.',
        'price' => '₱2,750,000', 
        'image' => 'E.jpg'
    ],
    [
        'id' => 'mega-nuke',
        'name' => 'Mega Nuke',
        'description' => 'Premium model for maximum coverage. Professional-grade specifications.',
        'price' => '₱550,000,000',
        'image' => 'S.jpg'
    ],
    [
        'id' => 'special-edition',
        'name' => 'Special Edition',
        'description' => 'Limited edition model with unique features. Collector\'s item quality.',
        'price' => '₱11,000,000',
        'image' => 'T.jpg'
    ]
];
?> 