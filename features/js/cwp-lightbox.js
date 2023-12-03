/**
 * When the lightbox feature is enabled, this javascript is loaded into the header.
 */
console.log("[CWP Toolkit] Feature enabled: cwp-lightbox.js");
document.addEventListener('DOMContentLoaded', function () {
    /**
     * Our selector pulled from our plugin settings.
     */
    const selector = "img." + cwpLightbox.selector;

    const imgs = document.querySelectorAll(selector);

    /**
     * Only proceed if there is more than 1 image to add an event listener to
     */
    if (imgs.length > 0) {
        /**
         * Add event listeners to each of our images
         */
        imgs.forEach(function (imgEle) {

            if (imgEle) {
                /**
                 * Indicate that the image is clickable on hover
                 */
                imgEle.addEventListener('mouseover', function () {
                    imgEle.style.cursor = 'pointer';
                });

                /**
                 * Create our lightbox when we click our image
                 */
                imgEle.addEventListener('click', function () {

                    /**
                     * Create a new div for our lightbox
                     */
                    const lightbox = document.createElement('div');
                    lightbox.classList.add('cwp_img-lightbox');

                    /**
                     * Duplicate our image and add it to our lightbox
                     */
                    const lightboxImg = document.createElement('img');
                    lightboxImg.src = imgEle.src;
                    lightboxImg.alt = imgEle.alt;

                    lightbox.appendChild(lightboxImg);
                    document.body.appendChild(lightbox);

                    /**
                     * Inline styles for the lightbox because I don't wanna load an independent stylesheet lol
                     */
                    lightbox.style.display = 'flex';
                    lightbox.style.position = 'fixed';
                    lightbox.style.top = '0';
                    lightbox.style.left = '0';
                    lightbox.style.width = '100vw';
                    lightbox.style.height = '100vh';
                    lightbox.style.zIndex = '9999999999';
                    lightbox.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
                    lightboxImg.style.margin = 'auto';
                    lightboxImg.style.maxHeight = '75vh';

                    /**
                     * When we click anywhere on the page, remove the lightbox from the DOM
                     */
                    lightbox.addEventListener('click', function () {
                        if (document.body.contains(lightbox)) {
                            document.body.removeChild(lightbox);
                        }
                    });

                    /**
                     * When we press any button, remove the lightbox from the DOM
                     */
                    window.addEventListener('keydown', function () {
                        if (document.body.contains(lightbox)) {
                            document.body.removeChild(lightbox);
                        }
                    });
                });
            }
        });
    } else {
        console.log('[CWP Toolkit] No <img> elements found with the selector:', selector);
    }
});
