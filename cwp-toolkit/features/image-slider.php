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
function enqueue_cwp_slider_script()
{
    wp_enqueue_script('cwp_image_slider_script', plugins_url('/js/cwp-image-slider.js', __FILE__), array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_cwp_slider_script');

function register_shortcode_image_slider($atts)
{

    if (!function_exists('get_option_value')) {
        function get_option_value($option_key, $default_value, $type = 'int')
        {
            $option_value = cwp_get_option($option_key);

            if (empty($option_value)) {
                switch ($type) {
                    case 'bool':
                        $option_value = boolval($default_value);
                        break;
                    case 'int':
                        $option_value = intval($default_value);
                        break;
                    case 'str':
                        $option_value = strval($default_value);
                        break;
                    default:
                        $option_value = $default_value;
                }
            }

            return $option_value;
        }
    }

    $cwp_slider_autoplay = get_option_value('cwp_slider_autoplay', true, 'bool');
    $cwp_slider_autoplay_speed = get_option_value('cwp_slider_autoplay_speed', 300, 'int');
    $cwp_slider_animation_speed = get_option_value('cwp_slider_animation_speed', 300, 'int');
    $cwp_slider_height = get_option_value('cwp_slider_height', '400px', 'str');
    $cwp_image_width = get_option_value('cwp_slider_image_width', 400, 'int');
    $cwp_fixed_image_width = get_option_value('cwp_slider_fixed_width', false, 'bool');
    $cwp_image_gap = get_option_value('cwp_slider_gap', 10, 'int');
    $cwp_image_fit = get_option_value('cwp_slider_display_mode', 'cover', 'str');
    $cwp_number_of_images_desktop = get_option_value('cwp_slider_number_of_images_desktop', 3, 'str');
    $cwp_number_of_images_tablet = get_option_value('cwp_slider_number_of_images_tablet', 2, 'str');
    $cwp_number_of_images_mobile = get_option_value('cwp_slider_number_of_images_mobile', 1, 'str');
    $cwp_slider_controls_size = get_option_value('cwp_slider_controls_size', '42px', 'str');
    $cwp_tablet_breakpoint = get_option_value('cwp_slider_tablet_breakpoint', 1000, 'int');
    $cwp_mobile_breakpoint = get_option_value('cwp_slider_mobile_breakpoint', 700, 'int');
    $cwp_pause_on_hover = get_option_value('cwp_slider_pause_on_hover', true, 'bool');

    $atts = shortcode_atts(
        array(
            'ids' => '',
            'autoplay' => $cwp_slider_autoplay,
            'autoplay_speed' => $cwp_slider_autoplay_speed,
            'animation_speed' => $cwp_slider_animation_speed,
            'slider_height' => $cwp_slider_height,
            'image_width' => $cwp_image_width,
            'fixed_width' => $cwp_fixed_image_width,
            'image_gap' => $cwp_image_gap,
            'image_fit' => $cwp_image_fit,
            'images_desktop' => $cwp_number_of_images_desktop,
            'images_tablet' => $cwp_number_of_images_tablet,
            'images_mobile' => $cwp_number_of_images_mobile,
            'controls_size' => $cwp_slider_controls_size,
            'tablet_breakpoint' => $cwp_tablet_breakpoint,
            'mobile_breakpoint' => $cwp_mobile_breakpoint,
            'pause_on_hover' => $cwp_pause_on_hover,
            'classes' => '',
        ),
        $atts,
        'cwp_slider'
    );

    $image_ids = explode(',', $atts['ids']);
    $image_urls = array();

    $autoplay = strval($atts['autoplay']);
    $autoplay_speed = intval($atts['autoplay_speed']);
    $animation_speed = intval($atts['animation_speed']);
    $slider_height = strval($atts['slider_height']);
    $image_width = intval($atts['image_width']);
    $fix_width = strval($atts['fixed_width']);
    $image_gap = intval($atts['image_gap']);
    $image_fit = strval($atts['image_fit']);
    $images_desktop = strval($atts['images_desktop']);
    $images_tablet = strval($atts['images_tablet']);
    $images_mobile = strval($atts['images_mobile']);
    $controls_size = strval($atts['controls_size']);
    $tablet_breakpoint = intval($atts['tablet_breakpoint']);
    $mobile_breakpoint = intval($atts['mobile_breakpoint']);
    $pause_on_hover = strval($atts['pause_on_hover']);
    $classes = esc_html($atts['classes']);

    $unique_id = rand(0, 32768);

    if (empty($image_ids))
        return 'Incorrect format.';

    foreach ($image_ids as $image_id) {
        $attachment_id = $image_id;
        $attachment_url = wp_get_attachment_url($attachment_id);

        array_push($image_urls, $attachment_url);
    }

    $image_elements = array();

    foreach ($image_urls as $image_url) {
        $image_element = "<img class='cwp_slider-image cwp_lightbox' src='" . esc_html($image_url) . "' alt='Slider image' data-unique-id='$unique_id'>";

        array_push($image_elements, $image_element);
    }

    $gallery_controls = "<div class='cwp_slider-controls' data-unique-id='$unique_id'>
    <div class='cwp_slider-prev dir' data-unique-id='$unique_id'><span>‹</span></div>
    <div class='cwp_slider-next dir' data-unique-id='$unique_id'><span>›</span></div>
    </div>";

    $gallery_div = "
    <div class='cwp_slider-wrapper" . (empty($classes) ? null : " $classes") . "' data-unique-id='$unique_id'>
        <div class='cwp_slider-container' data-unique-id='$unique_id'>
            <div data-autoplay='$autoplay' data-pause-on-hover='$pause_on_hover' data-autoplay-speed='$autoplay_speed' data-img-gap='$image_gap' class='cwp_slider' data-unique-id='$unique_id'>"
        . implode("", $image_elements) . "
            </div>
            $gallery_controls
        </div>
    </div>";


    $gallery_div .= "</div>"; //end gallery

    $gallery_styles = "
    <style>
    .cwp_slider-wrapper[data-unique-id='$unique_id'] {
        display: flex;
        align-items: center;
        justify-content: center;
        user-select: none;
        -moz-user-select: none;
    }
    .cwp_slider-container[data-unique-id='$unique_id'] {
        position: relative;
        overflow: hidden;
    }
    .cwp_slider-controls[data-unique-id='$unique_id'] {
        position: absolute;
        bottom: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 1rem 1rem 1rem;
        width: 100%;

        & .cwp_slider-prev[data-unique-id='$unique_id'] {
            pointer-events: unset;
        }

        & .cwp_slider-next[data-unique-id='$unique_id'] {
            pointer-events: unset;
        }
        
        & > * {
            --control-size: $controls_size;
            font-size: var(--control-size);
            cursor: pointer;

            display: flex;
            align-items: center;
            justify-content: center;
            height: var(--control-size);
            width: var(--control-size);
            background-color: rgba(0,0,0,0.3);
            color: white;
            border-radius: 1000px;

            & span {
                transform: translate(1px, -3px);
            }
        }
    }
    .cwp_slider[data-unique-id='$unique_id'] {
        display: flex;
        transition: " . $animation_speed . "ms linear;
        gap: " . $image_gap . "px;

        width: " . ((($image_width + $image_gap) * intval($images_desktop)) - $image_gap) . "px;
        height: $slider_height;
    }
    img.cwp_slider-image[data-unique-id='$unique_id'] {
        width: " . $image_width . "px;
        object-fit: $image_fit;
        min-width: " . ($fix_width == "true" ? ($image_width . "px !important") : "unset") . ";
        max-width: " . ($fix_width == "true" ? ($image_width . "px !important") : "unset") . ";
    }
    @media only screen and (max-width: " . $tablet_breakpoint . "px" . ") {
        .cwp_slider[data-unique-id='$unique_id'] {
            width: " . ((($image_width + $image_gap) * intval($images_tablet)) - $image_gap) . "px;
        }
    }
    @media only screen and (max-width: " . $mobile_breakpoint . "px" . ") {
        .cwp_slider[data-unique-id='$unique_id'] {
            width: " . ((($image_width + $image_gap) * intval($images_mobile)) - $image_gap) . "px;
        }
    }
    </style>
    ";
    return $gallery_div . $gallery_styles;
}

$cwp_enable_slider = cwp_get_option('cwp_enable_slider');

if ($cwp_enable_slider == "true")
    add_shortcode('cwp_slider', 'register_shortcode_image_slider');
