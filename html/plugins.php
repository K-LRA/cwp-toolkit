<?php

/**
 * Prevent direct access to this file.
 */
if (!defined('ABSPATH')) {
    die;
}

$quick_install_plugins = array(

    [
        'category' => 'Accessibility',
        'plugins' => [
            [
                'title' => 'Divi Accessibility',
                'external_url' => 'https://github.com/campuspress/divi-accessibility',
            ],
            [
                'title' => 'One Click Accessibility',
                'slug' => 'pojo-accessibility',
                'installed' => cwp_check_plugin_installed('pojo-accessibility/pojo-accessibility.php'),
                'active' => cwp_check_plugin_active('pojo-accessibility/pojo-accessibility.php'),
                'external_url' => null,
            ],
        ]
    ],

    [
        'category' => 'Access Management, Consent, GDPR Compliance, & Preloaders',
        'plugins' => [
            [
                'title' => 'Age Gate',
                'slug' => 'age-gate',
                'installed' => cwp_check_plugin_installed('age-gate/age-gate.php'),
                'active' => cwp_check_plugin_active('age-gate/age-gate.php'),
                'external_url' => null,
            ],
            [
                'title' => 'CookieYes | GDPR Cookie Consent',
                'slug' => 'cookie-law-info',
                'installed' => cwp_check_plugin_installed('cookie-law-info/cookie-law-info.php'),
                'active' => cwp_check_plugin_active('cookie-law-info/cookie-law-info.php'),
                'external_url' => null,
            ],
            [
                'title' => 'Coming Soon Page by SeedProd',
                'slug' => 'coming-soon',
                'installed' => cwp_check_plugin_installed('coming-soon/coming-soon.php'),
                'active' => cwp_check_plugin_active('coming-soon/coming-soon.php'),
                'external_url' => null,
            ],
            [
                'title' => 'Preloader Plus',
                'slug' => 'preloader-plus',
                'installed' => cwp_check_plugin_installed('preloader-plus/preloader-plus.php'),
                'active' => cwp_check_plugin_active('preloader-plus/preloader-plus.php'),
                'external_url' => null,
            ],
        ]
    ],

    [
        'category' => 'Booking & Event Calendars',
        'plugins' => [
            [
                'title' => 'Amelia',
                'slug' => 'ameliabooking',
                'installed' => cwp_check_plugin_installed('ameliabooking/ameliabooking.php'),
                'active' => cwp_check_plugin_active('ameliabooking/ameliabooking.php'),
                'external_url' => null,
            ],
            [
                'title' => 'Booking Calendar',
                'slug' => 'booking',
                'installed' => cwp_check_plugin_installed('booking/wpdev-booking.php'),
                'active' => cwp_check_plugin_active('booking/wpdev-booking.php'),
                'external_url' => null,
            ],
            [
                'title' => 'The Events Calendar',
                'slug' => 'the-events-calendar',
                'installed' => cwp_check_plugin_installed('the-events-calendar/the-events-calendar.php'),
                'active' => cwp_check_plugin_active('the-events-calendar/the-events-calendar.php'),
                'external_url' => null,
            ],
        ]
    ],

    [
        'category' => 'Carousels, Sliders, & Galleries',
        'plugins' => [
            [
                'title' => 'MetaSlider',
                'slug' => 'ml-slider',
                'installed' => cwp_check_plugin_installed('ml-slider/ml-slider.php'),
                'active' => cwp_check_plugin_active('ml-slider/ml-slider.php'),
                'external_url' => null,
            ],
        ]
    ],

    [
        'category' => 'Code',
        'plugins' => [
            [
                'title' => 'WPCode Lite',
                'slug' => 'insert-headers-and-footers',
                'installed' => cwp_check_plugin_installed('insert-headers-and-footers/ihaf.php'),
                'active' => cwp_check_plugin_active('insert-headers-and-footers/ihaf.php'),
                'external_url' => null,
            ],
        ]
    ],

    [
        'category' => 'Contact Forms',
        'plugins' => [
            [
                'title' => 'Contact Form 7',
                'slug' => 'contact-form-7',
                'installed' => cwp_check_plugin_installed('contact-form-7/wp-contact-form-7.php'),
                'active' => cwp_check_plugin_active('contact-form-7/wp-contact-form-7.php'),
                'external_url' => null,
            ],
            [
                'title' => 'Gravity Forms',
                'external_url' => 'https://www.gravityforms.com/',
            ],
            [
                'title' => 'WPForms Lite',
                'slug' => 'wpforms-lite',
                'installed' => cwp_check_plugin_installed('wpforms-lite/wpforms.php'),
                'active' => cwp_check_plugin_active('wpforms-lite/wpforms.php'),
                'external_url' => null,
            ],
        ]
    ],

    [
        'category' => 'Divi',
        'plugins' => [
            [
                'title' => 'Divi Torque Lite',
                'slug' => 'addons-for-divi',
                'installed' => cwp_check_plugin_installed('addons-for-divi/addons-for-divi.php'),
                'active' => cwp_check_plugin_active('addons-for-divi/addons-for-divi.php'),
                'external_url' => null,
            ],
            [
                'title' => 'Flip Cards Module For Divi',
                'slug' => 'lwp-divi-flipbox',
                'installed' => cwp_check_plugin_installed('flip-cards-module-divi/divi-flipbox.php'),
                'active' => cwp_check_plugin_active('flip-cards-module-divi/divi-flipbox.php'),
                'external_url' => null,
            ],
        ]
    ],

    [
        'category' => 'Donations',
        'plugins' => [
            [
                'title' => 'GiveWP',
                'slug' => 'give',
                'installed' => cwp_check_plugin_installed('give/give.php'),
                'active' => cwp_check_plugin_active('give/give.php'),
                'external_url' => null,
            ],
            [
                'title' => 'Accept Donations with PayPal',
                'slug' => 'easy-paypal-donation',
                'installed' => cwp_check_plugin_installed('easy-paypal-donation/easy-paypal-donation.php'),
                'active' => cwp_check_plugin_active('easy-paypal-donation/easy-paypal-donation.php'),
                'external_url' => null,
            ],
        ]
    ],

    [
        'category' => 'Email (SMTP)',
        'plugins' => [
            [
                'title' => 'Easy WP SMTP',
                'slug' => 'easy-wp-smtp',
                'installed' => cwp_check_plugin_installed('easy-wp-smtp/easy-wp-smtp.php'),
                'active' => cwp_check_plugin_active('easy-wp-smtp/easy-wp-smtp.php'),
                'external_url' => null,
            ],
        ]
    ],

    [
        'category' => 'Language',
        'plugins' => [
            [
                'title' => 'GTranslate',
                'slug' => 'gtranslate',
                'installed' => cwp_check_plugin_installed('gtranslate/gtranslate.php'),
                'active' => cwp_check_plugin_active('gtranslate/gtranslate.php'),
                'external_url' => null,
            ],
        ]
    ],

    [
        'category' => 'Membership',
        'plugins' => [
            [
                'title' => 'Paid Memberships Pro',
                'slug' => 'paid-memberships-pro',
                'installed' => cwp_check_plugin_installed('paid-memberships-pro/paid-memberships-pro.php'),
                'active' => cwp_check_plugin_active('paid-memberships-pro/paid-memberships-pro.php'),
                'external_url' => null,
            ],
            [
                'title' => 'Ultimate Member',
                'slug' => 'ultimate-member',
                'installed' => cwp_check_plugin_installed('ultimate-member/ultimate-member.php'),
                'active' => cwp_check_plugin_active('ultimate-member/ultimate-member.php'),
                'external_url' => null,
            ],
        ]
    ],

    [
        'category' => 'Menus',
        'plugins' => [
            [
                'title' => 'Conditional Menus',
                'slug' => 'conditional-menus',
                'installed' => cwp_check_plugin_installed('conditional-menus/init.php'),
                'active' => cwp_check_plugin_active('conditional-menus/init.php'),
                'external_url' => null,
            ],
        ]
    ],

    [
        'category' => 'Migration',
        'plugins' => [
            [
                'title' => 'All-in-One WP Migration',
                'slug' => 'all-in-one-wp-migration',
                'installed' => cwp_check_plugin_installed('all-in-one-wp-migration/all-in-one-wp-migration.php'),
                'active' => cwp_check_plugin_active('all-in-one-wp-migration/all-in-one-wp-migration.php'),
                'external_url' => null,
            ],
        ]
    ],

    [
        'category' => 'Optimization',
        'plugins' => [
            [
                'title' => '10Web Booster',
                'slug' => 'tenweb-speed-optimizer',
                'installed' => cwp_check_plugin_installed('tenweb-speed-optimizer/tenweb_speed_optimizer.php'),
                'active' => cwp_check_plugin_active('tenweb-speed-optimizer/tenweb_speed_optimizer.php'),
                'external_url' => null,
            ],
            [
                'title' => 'Advanced Database Cleaner',
                'slug' => 'advanced-database-cleaner',
                'installed' => cwp_check_plugin_installed('advanced-database-cleaner/advanced-db-cleaner.php'),
                'active' => cwp_check_plugin_active('advanced-database-cleaner/advanced-db-cleaner.php'),
                'external_url' => null,
            ],
            [
                'title' => 'Flying Pages',
                'slug' => 'flying-pages',
                'installed' => cwp_check_plugin_installed('flying-pages/flying-pages.php'),
                'active' => cwp_check_plugin_active('flying-pages/flying-pages.php'),
                'external_url' => null,
            ],
            [
                'title' => 'Hummingbird',
                'slug' => 'hummingbird-performance',
                'installed' => cwp_check_plugin_installed('hummingbird-performance/wp-hummingbird.php'),
                'active' => cwp_check_plugin_active('hummingbird-performance/wp-hummingbird.php'),
                'external_url' => null,
            ],
            [
                'title' => 'NitroPack',
                'slug' => 'nitropack',
                'installed' => cwp_check_plugin_installed('nitropack/main.php'),
                'active' => cwp_check_plugin_active('nitropack/main.php'),
                'external_url' => null,
            ],

            [
                'title' => 'Smush',
                'slug' => 'wp-smushit',
                'installed' => cwp_check_plugin_installed('wp-smushit/wp-smush.php'),
                'active' => cwp_check_plugin_active('wp-smushit/wp-smush.php'),
                'external_url' => null,
            ],

            [
                'title' => 'WebP Express',
                'slug' => 'webp-express',
                'installed' => cwp_check_plugin_installed('webp-express/webp-express.php'),
                'active' => cwp_check_plugin_active('webp-express/webp-express.php'),
                'external_url' => null,
            ],

            [
                'title' => 'WP Fastest Cache',
                'slug' => 'wp-fastest-cache',
                'installed' => cwp_check_plugin_installed('wp-fastest-cache/wpFastestCache.php'),
                'active' => cwp_check_plugin_active('wp-fastest-cache/wpFastestCache.php'),
                'external_url' => null,
            ],
        ]
    ],

    [
        'category' => 'Pop-Ups',
        'plugins' => [
            [
                'title' => 'Popup Builder',
                'slug' => 'popup-builder',
                'installed' => cwp_check_plugin_installed('popup-builder/popup-builder.php'),
                'active' => cwp_check_plugin_active('popup-builder/popup-builder.php'),
                'external_url' => null,
            ],
            [
                'title' => 'Popup Maker',
                'slug' => 'popup-maker',
                'installed' => cwp_check_plugin_installed('popup-maker/popup-maker.php'),
                'active' => cwp_check_plugin_active('popup-maker/popup-maker.php'),
                'external_url' => null,
            ],
        ]
    ],

    [
        'category' => 'Post Types & Taxonomies',
        'plugins' => [
            [
                'title' => 'Advanced Custom Fields',
                'slug' => 'advanced-custom-fields',
                'installed' => cwp_check_plugin_installed('advanced-custom-fields/acf.php'),
                'active' => cwp_check_plugin_active('advanced-custom-fields/acf.php'),
                'external_url' => null,
            ],
            [
                'title' => 'Pods',
                'slug' => 'pods',
                'installed' => cwp_check_plugin_installed('pods/init.php'),
                'active' => cwp_check_plugin_active('pods/init.php'),
                'external_url' => null,
            ],
            [
                'title' => 'Post Types Order',
                'slug' => 'post-types-order',
                'installed' => cwp_check_plugin_installed('post-types-order/post-types-order.php'),
                'active' => cwp_check_plugin_active('post-types-order/post-types-order.php'),
                'external_url' => null,
            ],
        ]
    ],

    [
        'category' => 'Reviews',
        'plugins' => [
            [
                'title' => 'Airbnb Reviews (Trustindex)',
                'slug' => 'review-widgets-for-airbnb',
                'installed' => cwp_check_plugin_installed('review-widgets-for-airbnb/review-widgets-for-airbnb.php'),
                'active' => cwp_check_plugin_active('review-widgets-for-airbnb/review-widgets-for-airbnb.php'),
                'external_url' => null,
            ],
            [
                'title' => 'Booking.com Reviews (Trustindex)',
                'slug' => 'review-widgets-for-booking-com',
                'installed' => cwp_check_plugin_installed('review-widgets-for-booking-com/review-widgets-for-booking-com.php'),
                'active' => cwp_check_plugin_active('review-widgets-for-booking-com/review-widgets-for-booking-com.php'),
                'external_url' => null,
            ],
            [
                'title' => 'Google Reviews (Trustindex)',
                'slug' => 'wp-reviews-plugin-for-google',
                'installed' => cwp_check_plugin_installed('wp-reviews-plugin-for-google/wp-reviews-plugin-for-google.php'),
                'active' => cwp_check_plugin_active('wp-reviews-plugin-for-google/wp-reviews-plugin-for-google.php'),
                'external_url' => null,
            ],
            [
                'title' => 'Tripadvisor Reviews (Trustindex)',
                'slug' => 'review-widgets-for-tripadvisor',
                'installed' => cwp_check_plugin_installed('review-widgets-for-tripadvisor/review-widgets-for-tripadvisor.php'),
                'active' => cwp_check_plugin_active('review-widgets-for-tripadvisor/review-widgets-for-tripadvisor.php'),
                'external_url' => null,
            ],
            [
                'title' => 'Yelp Reviews (Trustindex)',
                'slug' => 'reviews-widgets-for-yelp',
                'installed' => cwp_check_plugin_installed('reviews-widgets-for-yelp/reviews-widgets-for-yelp.php'),
                'active' => cwp_check_plugin_active('reviews-widgets-for-yelp/reviews-widgets-for-yelp.php'),
                'external_url' => null,
            ],
        ]
    ],

    [
        'category' => 'Security',
        'plugins' => [
            [
                'title' => 'Defender',
                'slug' => 'defender-security',
                'installed' => cwp_check_plugin_installed('defender-security/wp-defender.php'),
                'active' => cwp_check_plugin_active('defender-security/wp-defender.php'),
                'external_url' => null,
            ],
            [
                'title' => 'Wordfence Security',
                'slug' => 'wordfence',
                'installed' => cwp_check_plugin_installed('wordfence/wordfence.php'),
                'active' => cwp_check_plugin_active('wordfence/wordfence.php'),
                'external_url' => null,
            ],
        ]
    ],

    [
        'category' => 'SEO',
        'plugins' => [
            [
                'title' => 'Google XML Sitemap',
                'slug' => 'google-sitemap-generator',
                'installed' => cwp_check_plugin_installed('google-sitemap-generator/sitemap.php'),
                'active' => cwp_check_plugin_active('google-sitemap-generator/sitemap.php'),
                'external_url' => null,
            ],
            [
                'title' => 'Redirection',
                'slug' => 'redirection',
                'installed' => cwp_check_plugin_installed('redirection/redirection.php'),
                'active' => cwp_check_plugin_active('redirection/redirection.php'),
                'external_url' => null,
            ],
            [
                'title' => 'Yoast SEO',
                'slug' => 'wordpress-seo',
                'installed' => cwp_check_plugin_installed('wordpress-seo/wp-seo.php'),
                'active' => cwp_check_plugin_active('wordpress-seo/wp-seo.php'),
                'external_url' => null,
            ],
        ]
    ],

    [
        'category' => 'Social Media',
        'plugins' => [
            [
                'title' => 'Facebook Page Embed',
                'external_url' => 'https://developers.facebook.com/docs/plugins/page-plugin/',
            ],
            [
                'title' => 'Smash Balloon Instagram Feed',
                'slug' => 'instagram-feed',
                'installed' => cwp_check_plugin_installed('instagram-feed/instagram-feed.php'),
                'active' => cwp_check_plugin_active('instagram-feed/instagram-feed.php'),
                'external_url' => null,
            ],
        ]
    ],

    [
        'category' => 'Tools',
        'plugins' => [
            [
                'title' => 'Better Search Replace',
                'slug' => 'better-search-replace',
                'installed' => cwp_check_plugin_installed('better-search-replace/better-search-replace.php'),
                'active' => cwp_check_plugin_active('better-search-replace/better-search-replace.php'),
                'external_url' => null,
            ],

            [
                'title' => 'Folders (Media Library)',
                'slug' => 'folders',
                'installed' => cwp_check_plugin_installed('folders/folders.php'),
                'active' => cwp_check_plugin_active('folders/folders.php'),
                'external_url' => null,
            ],

            [
                'title' => 'PDF Embedder',
                'slug' => 'pdf-embedder',
                'installed' => cwp_check_plugin_installed('pdf-embedder/pdf_embedder.php'),
                'active' => cwp_check_plugin_active('pdf-embedder/pdf_embedder.php'),
                'external_url' => null,
            ],

            [
                'title' => 'Restrict User Access',
                'slug' => 'restrict-user-access',
                'installed' => cwp_check_plugin_installed('restrict-user-access/restrict-user-access.php'),
                'active' => cwp_check_plugin_active('restrict-user-access/restrict-user-access.php'),
                'external_url' => null,
            ],

            [
                'title' => 'Simple History',
                'slug' => 'simple-history',
                'installed' => cwp_check_plugin_installed('simple-history/index.php'),
                'active' => cwp_check_plugin_active('simple-history/index.php'),
                'external_url' => null,
            ],

            [
                'title' => 'User Switching',
                'slug' => 'user-switching',
                'installed' => cwp_check_plugin_installed('user-switching/user-switching.php'),
                'active' => cwp_check_plugin_active('user-switching/user-switching.php'),
                'external_url' => null,
            ],

            [
                'title' => 'Yoast Duplicate Post',
                'slug' => 'duplicate-post',
                'installed' => cwp_check_plugin_installed('duplicate-post/duplicate-post.php'),
                'active' => cwp_check_plugin_active('duplicate-post/duplicate-post.php'),
                'external_url' => null,
            ],
        ]
    ],

    [
        'category' => 'Typography',
        'plugins' => [
            [
                'title' => 'Typing Effect',
                'slug' => 'typing-effect',
                'installed' => cwp_check_plugin_installed('animated-typing-effect/typingeffect.php'),
                'active' => cwp_check_plugin_active('animated-typing-effect/typingeffect.php'),
                'external_url' => null,
            ],
        ]
    ],

    [
        'category' => 'WooCommerce',
        'plugins' => [
            [
                'title' => 'WooCommerce',
                'slug' => 'woocommerce',
                'installed' => cwp_check_plugin_installed('woocommerce/woocommerce.php'),
                'active' => cwp_check_plugin_active('woocommerce/woocommerce.php'),
                'external_url' => null,
            ],
        ]
    ],

    [
        'category' => 'WPMU DEV',
        'plugins' => [
            [
                'title' => 'WPMU DEV',
                'external_url' => 'https://wpmudev.com/',
            ],
        ]
    ],
);

?>

<div class='cwp_plugin-categories'>
    <div class='cwp_plugin-category-filter active' data-filter='all'>All</div>
    <?php
    foreach ($quick_install_plugins as $qip_category) {
        $plugin_category = $qip_category['category'];
    ?>
        <div class='cwp_plugin-category-filter' data-filter='<?= $plugin_category ?>'><?= $plugin_category ?></div>
    <?php
    }
    ?>
</div>

<div class='cwp_plugin-cards-container'>
    <?php

    $open_new_tab = cwp_get_option('cwp_quick_install_new_tab') == "true";

    foreach ($quick_install_plugins as $qip_category) {
        $plugin_category = $qip_category['category'];
        echo "<div class='cwp_plugin-card-category' data-filter='$plugin_category'>";
        echo "<h3>$plugin_category</h3>";
        echo "<div class='cwp_plugin-cards'>";

        foreach ($qip_category['plugins'] as $qip_plugin) {
            $plugin_title = $qip_plugin['title'] ?? "Undefined title";
            $plugin_slug = $qip_plugin['slug'] ?? "undefined-slug";
            $plugin_installed = $qip_plugin['installed'] ?? false;
            $plugin_active = $qip_plugin['active'] ?? false;
            $plugin_installed_not_active = $plugin_installed && !$plugin_active;
            $plugin_external_url = $qip_plugin['external_url'];
            $url_target = ((!$plugin_installed || ($plugin_external_url != null) || $open_new_tab) ? "target='_blank'" : null);
            $plugin_page = $plugin_external_url != null ? $plugin_external_url : "/wp-admin/plugin-install.php?tab=plugin-information&plugin=$plugin_slug";

            echo "<div class='cwp_plugin-card'>";
            echo "<div class='cwp_plugin-card-title'><h4>$plugin_title</h4><a href='$plugin_page' target='_blank'>📄</a></div>";
            echo "<div class='cwp_plugin-buttons'>";
            if ($plugin_external_url != null) {
                echo "<a $url_target type='button' class='cwp_button cwp_external_url' href=" . $plugin_external_url . ">Go to $plugin_title 🔗</a>";
            } else {
                echo "<a $url_target type='button' class='cwp_button" . ($plugin_active ? " button-disabled cwp_active" : ($plugin_installed_not_active ? " cwp_not_active" : " cwp_not_installed")) . "' href='" . ($plugin_installed ? "/wp-admin/plugins.php?s=$plugin_slug&plugin_status=all" : "/wp-admin/plugin-install.php?tab=plugin-information&plugin=$plugin_slug") . "' plugin-slug='$plugin_slug'>" . ($plugin_active ? "Active" : ($plugin_installed_not_active ? "Activate" : "Install"))  . "</a>";

                if ($plugin_installed) {
                    echo "<a $url_target type='button' class='cwp_button' href='/wp-admin/plugins.php?s=$plugin_slug&plugin_status=all'>Manage</a>";
                }
            }
            echo "</div></div>";
        }
        echo "</div></div>";
    }
    ?>
</div>

<style>
    .cwp_plugin-card {
        background-color: white;
        min-width: 100px;
        width: fit-content;
        padding: 15px;
        border-radius: 6px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;


        &.hidden {
            display: none;
        }

        & h4,
        & p {
            margin: 0;
            padding: 0;
        }

        & .button-disabled {
            pointer-events: none;
        }

        & a {
            max-width: fit-content;
        }

        &>*:not(:last-child) {
            margin-bottom: 15px !important;
        }
    }

    .cwp_plugin-cards {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        max-width: 800px;
    }

    .cwp_plugin-buttons {
        display: flex;
        gap: 10px;
    }

    .cwp_plugin-card-title {
        display: flex;
        align-items: center;
        gap: 3px;

        & a {
            text-decoration: none;
            color: inherit;
            transform: translatey(-1px);
        }
    }

    .cwp_button {
        --cwp_not_installed: #2271b1;
        --cwp_not_active: #DEA01E;
        --cwp_external_url: #008373;

        display: inline-block;
        text-decoration: none;
        font-size: 13px;
        line-height: 2.15384615;
        min-height: 30px;
        margin: 0;
        padding: 0 10px;
        cursor: pointer;
        border-width: 1px;
        border-style: solid;
        appearance: none;
        -webkit-appearance: none;
        border-radius: 3px;
        white-space: nowrap;
        box-sizing: border-box;
        background: #2271b1;
        border-color: #2271b1;
        color: white;
        text-decoration: none;
        text-shadow: none;
        transition: 100ms linear;

        &:focus {
            color: white;
        }

        &:hover {
            color: white;
            transform: translatey(2px);
        }


        &.cwp_not_installed {
            background: var(--cwp_not_installed);
            border-color: var(--cwp_not_installed);
        }

        &.cwp_not_active {
            background: var(--cwp_not_active);
            border-color: var(--cwp_not_active);
        }

        &.cwp_external_url {
            background: var(--cwp_external_url);
            border-color: var(--cwp_external_url);
        }
    }

    .cwp_plugin-categories {
        max-width: 1080px;
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        grid-gap: 10px;

        &>div {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            text-align: center;
            padding: 6px;
            border-radius: 6px;
            cursor: pointer;
            transition: 100ms linear;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
            opacity: 0.5;

            &.active {
                opacity: 1;
                transform: translatey(2px);
                background-color: #fafafa;
            }

            &:hover {
                transform: translatey(2px);
            }
        }
    }

    #submit {
        display: none;
    }
</style>