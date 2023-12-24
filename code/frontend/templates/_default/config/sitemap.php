<?php

/**
 * Sitemap configuration
 *
 * PHP version 8.1
 *
 * @phpversion >= 8.1
 * @category   CMS
 * @package    AVCorn
 * @subpackage Configuration
 * @author     Benjamin J. Young <ben@blaher.me>
 * @license    GNU General Public License, version 3
 * @link       https://github.com/avcorn/avcorn
 */

declare(strict_types=1);

/**
 * Sitemap configuration
 *
 * @var array $sitemap Sitemap configuration
 */
$sitemap = [
    'sections' => [
        'main' => [
            'title' => 'AVCorn',
            'link' => '/',
            'pages' => [
                'home',
                'about',
                'services',
                'gallery',
                'testimonials',
                'contact',
            ],
        ],
        'secondary' => [
            'title' => 'Resources',
            'description' => 'Find out more about us.',
            'link' => '/about',
            'pages' => [
                'guide',
                'designs',
                'playground',
                'contribute',
            ],
        ],
        'other' => [
            'title' => 'Other Details',
            'description' => 'Additional information.',
            'link' => '/sitemap',
            'pages' => [
                'terms',
                'privacy',
                'sitemap',
            ],
        ],
    ],
    'pages' => [
        'home' => [
            'title' => 'Home',
            'link' => '/',
        ],
        'about' => [
            'title' => 'About Us',
            'description' => 'Information and history of AVCorn.',
            'link' => '/about',
        ],
        'contact' => [
            'title' => 'Contact Us',
            'description' => 'How to contact us.',
            'link' => '/contact',
        ],
        'contribute' => [
            'title' => 'Contribute',
            'description' => 'How you can contribute to AVCorn.',
            'link' => '/contribute',
        ],
        'guide' => [
            'title' => 'Guide',
            'description' => 'Walkthrough of how to use AVCorn.',
            'link' => '/guide',
        ],
        'designs' => [
            'title' => 'Designs',
            'description' => 'List of our designs.',
            'link' => '/designs',
        ],
        'gallery' => [
            'title' => 'Gallery',
            'description' => 'Photo gallery.',
            'link' => '/gallery',
        ],
        'playground' => [
            'title' => 'Styles Playground',
            'description' => 'Everything on demo, but the kitchen sink.',
            'link' => '/playground',
        ],
        'services' => [
            'title' => 'Services',
            'description' => 'Services we offer.',
            'link' => '/services',
        ],
        'testimonials' => [
            'title' => 'Testimonials',
            'description' => 'Testimonials of our customers.',
            'link' => '/testimonials',
        ],
        'terms' => [
            'title' => 'Terms of Use',
            'description' => 'Terms of use of the website.',
            'link' => '/terms-of-use',
        ],
        'privacy' => [
            'title' => 'Privacy Policy',
            'description' => 'Privacy policy of the website.',
            'link' => '/privacy-policy',
        ],
        'sitemap' => [
            'title' => 'Sitemap',
            'description' => 'Navigation map of the website.',
            'link' => '/sitemap',
        ],
    ],
];
