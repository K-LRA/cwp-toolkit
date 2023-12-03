/**
 * When the image gallery feature is enabled, this javascript is loaded into the header.
 */
console.log("[CWP Toolkit] Feature enabled: cwp-image-slider.js");
document.addEventListener('DOMContentLoaded', function () {
    const wrappers = document.querySelectorAll('.cwp_slider-wrapper');

    if (wrappers.length > 0) {
        wrappers.forEach(function (wrapper) {

            if (wrapper) {
                const container = wrapper.querySelector('.cwp_slider-container');
                const controls = container.querySelector('.cwp_slider-controls');
                const btnPrev = controls.querySelector('.cwp_slider-prev');
                const btnNext = controls.querySelector('.cwp_slider-next');
                const slider = container.querySelector('.cwp_slider');
                const isAutoplay = slider.getAttribute('data-autoplay') == "true";
                const isPauseOnHover = slider.getAttribute('data-pause-on-hover') == "true";
                const autoplaySpeed = parseInt(slider.getAttribute('data-autoplay-speed')) || 3000;
                const imgGap = parseInt(slider.getAttribute('data-img-gap')) || 0;
                const imgs = Array.from(slider.querySelectorAll('img'));
                let currentImageIndex = 0;
                let pause = false;

                if (isPauseOnHover) {
                    container.addEventListener('mouseenter', function () {
                        pause = true;
                    });
                    container.addEventListener('mouseleave', function () {
                        pause = false;

                    });
                }

                btnPrev.addEventListener('click', function () {
                    prevImage();
                });
                btnNext.addEventListener('click', function () {
                    nextImage(true);
                });

                function prevImage() {
                    currentImageIndex = (currentImageIndex - 1 + imgs.length) % imgs.length;
                    updateSlider(currentImageIndex);
                }

                function nextImage(click) {
                    if (pause && !click)
                        return;
                    currentImageIndex = (currentImageIndex + 1) % imgs.length;
                    updateSlider(currentImageIndex);
                }

                if (isAutoplay) {
                    loop();
                }

                function loop() {
                    setTimeout(function () {
                        nextImage(false);
                        loop();
                    }, autoplaySpeed);
                }

                function updateSlider(currentImageIndex) {
                    const translateValue = -((imgs[currentImageIndex].width + imgGap) * currentImageIndex);
                    slider.style.transform = 'translateX(' + translateValue + 'px)';
                }
            }
        });
    } else {
        console.log('[CWP Toolkit] No image slider elements found.');
    }
});
