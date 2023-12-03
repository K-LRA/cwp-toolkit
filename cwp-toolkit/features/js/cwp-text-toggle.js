/**
 * When the cwp_toggle feature is enabled, this javascript is loaded into the header.
 */
console.log("[CWP Toolkit] Feature enabled: cwp-toggle.js");
document.addEventListener('DOMContentLoaded', function () {
    const toggles = document.querySelectorAll('.cwp_toggle');

    if (toggles.length > 0) {
        toggles.forEach(toggle => {

            if (toggle) {
                const text = toggle.querySelector('p');
                const btn = toggle.querySelector('a');

                const labelClosed = btn.getAttribute('data-label-closed');
                const labelOpen = btn.getAttribute('data-label-open');

                const breakpoint = parseInt(toggle.getAttribute('data-breakpoint')) || 150;

                const more = text.textContent;
                const less = text.textContent.substring(0, breakpoint);

                const ellipsis = text.getAttribute('data-ellipsis') || false;

                const end = (ellipsis == "true") ? "..." : "";

                let open = false;
                text.textContent = less.trimEnd() + end;

                btn.addEventListener('click', function () {
                    text.textContent = !open ? more : (less.trimEnd() + end);
                    btn.textContent = !open ? labelOpen : labelClosed;
                    open = !open;
                });
            }
        });
    } else {
        console.log("[CWP Toolkit] No text toggle elements found.");
    }
});