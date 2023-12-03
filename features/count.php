<?php

/**
 * Prevent direct access to this file.
 */
if (!defined('ABSPATH')) {
    die;
}

/**
 * Enqueue JS for this feature
 */
function enqueue_cwp_count_script()
{
    wp_enqueue_script('cwp_count_script', plugins_url('/js/cwp-count.js', __FILE__), array(), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_cwp_count_script');

function register_shortcode_cwp_count($atts)
{
    // Define default values
    $atts = shortcode_atts(
        array(
            'to'      => 0,
            'from'    => 0,
            'prefix'  => '',
            'suffix'  => '',
            'speed'   => 1000,
            'classes' => '',
        ),
        $atts,
        'cwp_count'
    );

    $to = intval($atts['to']);
    $from = intval($atts['from']);

    if ($to < 1 || $to <= $from) {
        return "Usage examples: <code>[cwp_count to='100']</code>, <code>[cwp_count to='100' from='50' prefix='$' suffix='.00' speed='2000']</code>";
    }

    $prefix  = esc_attr($atts['prefix']);
    $suffix  = esc_attr($atts['suffix']);
    $speed   = intval($atts['speed']);
    $classes = sanitize_text_field($atts['classes']);

    ob_start();
?>
    <span class="cwp_count<?php echo (empty($classes) ? '' : ' ' . $classes); ?>" data-to="<?= esc_attr($to); ?>" data-from="<?= esc_attr($from); ?>" data-prefix="<?= esc_attr($prefix); ?>" data-suffix="<?= esc_attr($suffix); ?>" data-speed="<?= esc_attr($speed); ?>"></span>
<?php

    return ob_get_clean();
}

add_shortcode('cwp_count', 'register_shortcode_cwp_count');
