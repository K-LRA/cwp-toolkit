/**
 * When the progressive counter feature is enabled, this javascript is loaded into the header.
 */
console.log("[CWP Toolkit] Feature enabled: cwp-count.js");
document.addEventListener('DOMContentLoaded', function () {
    /**
     * Find all progressive counters on the DOM
     */
    const counters = document.querySelectorAll('.cwp_count');

    if (counters.length > 0) {
        counters.forEach(function (counter) {

            if (counter) {
                const to = parseInt(counter.getAttribute('data-to'));
                const from = parseInt(counter.getAttribute('data-from'));
                const prefix = counter.getAttribute('data-prefix') || '';
                const suffix = counter.getAttribute('data-suffix') || '';
                const speed = parseInt(counter.getAttribute('data-speed')) || 1000;

                const start = performance.now();
                const duration = speed;

                /**
                * Increment each counter relative to its specified speed
                */
                function updateValue(timestamp) {
                    const progress = (timestamp - start) / duration;
                    const current = Math.floor(progress * (to - from) + from);

                    /**
                     * Stop at 'to' PLEASE
                    */
                    if (current <= to) {
                        counter.textContent = prefix + current + suffix;
                        requestAnimationFrame(updateValue);
                    } else {
                        counter.textContent = prefix + to + suffix;
                    }
                }
                requestAnimationFrame(updateValue);
            }
        });
    } else {
        console.log('[CWP Toolkit] No progressive counter elements found.');
    }
});