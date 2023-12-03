/**
 * When the copy shortcode setting is enabled, this javascript is loaded into the header on this plugin's admin pages
 */
console.log("[CWP Toolkit] Feature enabled: cwp-copy-shortcode.js");
document.addEventListener('DOMContentLoaded', function () {
    /**
     * Get all of our shortcodes
     */
    const shortcodes = document.querySelectorAll('code.shortcode');

    if (shortcodes.length > 0) {
        shortcodes.forEach(function (shortcode) {
            if (shortcode) {
                /**
                 * Add class when clicked, if element doesn't already have it.
                 * Added a 1s timeout so the animation can play through.
                 */
                shortcode.addEventListener('click', function () {
                    if (!shortcode.classList.contains('cwp_clicked')) {
                        shortcode.classList.add('cwp_clicked');

                        setTimeout(function () {
                            shortcode.classList.remove('cwp_clicked');
                        }, 1000);

                        copyShortcode(shortcode);
                    }
                });

                /**
                * Create a dummy text area, fill it with the shortcode's innerText, copy it to the clipboard, and delete the text area.
                */
                function copyShortcode(shortcode) {
                    const text = shortcode.innerText;
                    const textArea = document.createElement('textarea');
                    textArea.value = text;
                    document.body.appendChild(textArea);
                    textArea.select();
                    document.execCommand('copy');
                    document.body.removeChild(textArea);
                    shortcode.innerText = text + ' ✅';

                    setTimeout(function () {
                        shortcode.innerText = text;
                    }, 1000);
                }
            }
        });
    } else {
        console.log('[CWP Toolkit] No shortcode elements found.');
    }
});