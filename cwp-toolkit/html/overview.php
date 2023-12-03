<?php

/**
 * Prevent direct access to this file.
 */
if (!defined('ABSPATH')) {
    die;
}
?>
<h2>All Shortcodes</h2>
<p>
    Below is a list of all available shortcodes. Below this list is a breakdown of the shortcodes with required or optional parameters. <br>
    Click on any shortcode to copy it to the clipboard.
</p>
<div class="break">
    <code class="shortcode">[cwp_business_name]</code>
    <code class="shortcode">[cwp_primary_email]</code>
    <code class="shortcode">[cwp_secondary_email]</code>
    <code class="shortcode">[cwp_primary_phone]</code>
    <code class="shortcode">[cwp_secondary_phone]</code>
    <code class="shortcode">[cwp_street_address]</code>
    <code class="shortcode">[cwp_province]</code>
    <code class="shortcode">[cwp_country]</code>
    <code class="shortcode">[cwp_postal_code]</code>
    <code class="shortcode">[cwp_full_address]</code>
    <code class="shortcode">[cwp_current_year]</code>
    <span class="cwp_required"><code class="shortcode">[cwp_maps_url link="true"]</code>&nbsp;<span>*</span></span>
    <span class="cwp_required"><code class="shortcode">[cwp_full_address country="false" link="true" usemaps="false"]</code>&nbsp;<span>*</span></span>
    <span class="cwp_required"><code class="shortcode">[cwp_days date="1/1/1990" format="true"]</code>&nbsp;<span>**</span></span>
    <span class="cwp_required"><code class="shortcode">[cwp_count to="100" from="0" prefix="$" suffix=".00" speed="750" classes="revenue size-xl"]</code>&nbsp;<span>**</span></span>
    <span class="cwp_required"><code class="shortcode">[cwp_typing_effect string="This is a test string" speed="2000" classes="title fast"]</code>&nbsp;<span>**</span></span>
    <span class="cwp_required"><code class="shortcode">[cwp_slider ids="35,36,100,101,102,103,104,105"]</code>&nbsp;<span>**</span></span>
    <span class="cwp_required"><code class="shortcode">[cwp_toggle text="This is some really cool text that is way too long." breakpoint="50"]</code>&nbsp;<span>**</span></span>
</div>

<div class="break">
    <i>The above shortcodes outputs plain text. Formatting with HTML and CSS may be necessary.</i><br>
    <i>Shortcodes marked with an asterisk (*) have <b>optional</b> parameters.</i><br>
    <i>Shortcodes marked with a double-asterisk (**) <b>require at least the first parameter</b>, specified above, to function.</i>
</div>

<div class="break">
    <h2>Shortcode Breakdowns</h2>
    <div class="break">
        <code class="shortcode">[cwp_full_address country="false"]</code>
        <i>The above shortcode outputs the full address in plain text, excluding the country.</i>
    </div>

    <div class="break">
        <code class="shortcode">[cwp_full_address country="false" link="true"]</code>
        <code class="shortcode">[cwp_full_address country="false" link="true" usemaps="true"]</code>
        <i>The above shortcodes both output an <code>a</code> element. <br>
            The optional <code>country</code> parameter, if <code>false</code>, omits the country from the displayed address. <br>
            The optional <code>link</code> parameter, if <code>true</code>, makes the address clickable. Clicking on the address will open Google Maps in a new tab and search for the full address, including country. <br>
            The optional <code>usemaps</code> parameter, if <code>true</code>, overrides the generated Google Maps search and uses the Maps URL defined under the <a href="/wp-admin/admin.php?page=cwp_settings&tab=nap-data">NAP Data</a> tab. <br>
        </i>
    </div>

    <div class="break">
        <code class="shortcode">[cwp_days date="1/1/1990" format="true"]</code>
        <i>The above shortcode calculates and displays the delta between today's date and the input <code>date</code>.</i><br>
        <i>The required <code>date</code> parameter is the date that that we start counting from. If <code>date</code> is in the past, the number will increase every day. If it's in the future, the number will decrease.</i><br>
        <i>The optional <code>format</code> parameter, when <code>true</code>, applies a basic number format. e.g. <code>12,345</code></i>
    </div>

    <div class="break">
        <code class="shortcode">[cwp_maps_url link="true"]</code>
        <i>The above shortcode outputs an <code>a</code> element. <br>
            The optional <code>link</code> parameter, if <code>true</code>, makes the Maps URL clickable. Clicking on the Maps URL will open the Maps URL defined in the <a href="/wp-admin/admin.php?page=cwp_settings&tab=nap-data">NAP Data</a> tab. This opens in a new tab.<br>
            If the optional <code>link</code> parameter is <code>true</code> and the Maps URL does not start with <code>https://</code>, it is prepended to the Maps URL. The displayed Maps URL is not affected.</i>
    </div>

    <div class="break">
        <code class="shortcode">[cwp_count to="100"]</code>
        <i>When the <a href="/wp-admin/admin.php?page=cwp_settings&tab=features">progressive counter feature is enabled</a>, JavaScript is used to output a progressive counter as a <code>span</code> element. The progressive counter starts at 0 and counts to <code>to</code> over <code>1000</code>ms.</i><br>
        <i>Target all progress counters via class <code>cwp_count</code>.</i>
    </div>

    <div class="break">
        <code class="shortcode">[cwp_count from="50" to="1000" prefix="$" suffix=".00" speed="2000" classes="revenue size-xl"]</code>
        <i>When the <a href="/wp-admin/admin.php?page=cwp_settings&tab=features">progressive counter feature is enabled</a>, JavaScript is used to output a progressive counter as a <code>span</code> element. <br>
            The optional <code>prefix</code> and <code>suffix</code> parameter values are respectively prepended and appended to the progressive counter. <br>
            Over the course of <code>speed</code>ms, the number counts from <code>from</code> to <code>to</code>. Specifying <code>speed</code> is optional and defaults to <code>1000</code>.<br>
            Use the optional <code>classes</code> parameter to specify additional classes separated by spaces.</i>
    </div>

    <div class="break">
        <code class="shortcode">[cwp_typing_effect string="This is a test string" speed="2000" classes="title fast"]</code>
        <i>When the <a href="/wp-admin/admin.php?page=cwp_settings&tab=features">typing effect feature is enabled</a>, JavaScript is used to output a string of characters, letter by letter, over the duration of <code>1000</code>ms. <br>
            Specifying <code>speed</code> is optional and defaults to <code>1000</code>.<br>
            Use the optional <code>classes</code> parameter to specify additional classes separated by spaces.</i>
    </div>
    <div class="break">
        <code class="shortcode long">[cwp_slider ids="35,36,100,101,102,103,104,105" autoplay="true" autoplay_speed="3000" animation_speed="600" slider_height="500" image_width="500" fix_width="true" image_gap="10px" image_fit="cover" images_desktop="3" images_tablet="2" images_mobile="1" controls_size="42px" tablet_breakpoint="1000" mobile_breakpoint="700" classes="some-class"]</code>
        <i>Only works when the <a href="/wp-admin/admin.php?page=cwp_settings&tab=slider">image slider is enabled</a>. <b>Only the <code>ids</code> parameter is required.</b> All other parameters are optional, but are available if needed. They are used to override the settings specified in the <a href="/wp-admin/admin.php?page=cwp_settings&tab=slider">Image Slider</a> tab.<br>
            The mandatory <code>ids</code> parameter requires a comma-separated list of the image/attachment ids you're including in your slider. This can be found at: <a href="/wp-admin/upload.php">Media Library</a> > [select your image] > number in the URL. e.g. <code>l/wp-admin/upload.php?item=<b><u>108</u></b></code><br>
            The optional <code>autoplay</code> parameter, if <code>true</code>, advances the slider automatically.<br>
            The optional <code>autoplay_speed</code> parameter determines the frequency at which, in <code>ms</code>, the slider will advance to the next image.<br>
            The optional <code>animation_speed</code> parameter determines the speed at which the 'next slide animation' plays.<br>
            The optional <code>slider_height</code> parameter specifies the height of the slider.<br>
            The optional <code>image_width</code> parameter specifies the preferred width of slider images. If images within the slider have widths that exceed this value, they will be resized to the specified <code>image_width</code>.<br>
            The optional <code>fix_width</code> parameter specifies whether to fix the width of the images to the preferred <code>image_width</code>. Useful if you're trying to maintain consistent image sizes.<br>
            The optional <code>image_gap</code> parameter specifies the gap between one image and the next.<br>
            The optional <code>image_fit</code> parameter determines how the image should be resized to fit its container. See: <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/object-fit" target="_blank">object-fit - CSS</a><br>
            The optional <code>images_desktop</code> parameter specifies the number of images to display on desktop devices.<br>
            The optional <code>images_tablet</code> parameter specifies the number of images to display on tablet devices.<br>
            The optional <code>images_mobile</code> parameter specifies the number of images to display on mobile devices.<br>
            The optional <code>controls_size</code> parameter specifies the size of the <code>previous</code> and <code>next</code> arrows.<br>
            The optional <code>tablet_breakpoint</code> parameter specifies, in <code>px</code>, the viewport width at which to display the number of images defined in the<code>images_tablet</code> parameter.<br>
            The optional <code>mobile_breakpoint</code> parameter specifies, in <code>px</code>, the viewport width at which to display the number of images defined in the<code>images_mobile</code> parameter.<br>
            Use the optional <code>classes</code> parameter to specify additional classes separated by spaces.</i>
    </div>
    <div class="break">
        <code class="shortcode">[cwp_toggle text="This is some really cool text that is way too long." closed_label="Show more" open_label="Show less" breakpoint="50" ellipsis="false"]</code>
        <i>When the <a href="/wp-admin/admin.php?page=cwp_settings&tab=features">text toggle feature is enabled</a>, JavaScript is used to create a 'show less/show more' toggle.</i><br>
        <i>The mandatory <code>text</code> parameter specifies the text you want to display.</i><br>
        <i>The optional <code>breakpoint</code> parameter specifies the index at which you want the string to split.</i><br>
        <i>The optional <code>closed_label</code> parameter specifies the collapsed button label.</i><br>
        <i>The optional <code>open_label</code> parameter specifies the expanded button label.</i><br>
        <i>The optional <code>ellipsis</code> parameter, if <code>false</code>, removes the ellipsis from the end of the shortened text.</i><br>
    </div>
</div>

<style>
    #submit {
        display: none;
    }
</style>