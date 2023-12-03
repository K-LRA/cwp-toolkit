/**
 * When the typing effect feature is enabled, this javascript is loaded into the header.
 */
console.log("[CWP Toolkit] Feature enabled: cwp-typing-effect.js");
document.addEventListener('DOMContentLoaded', function () {
    const strings = document.querySelectorAll('.cwp_typing-effect');

    if (strings.length > 0) {
        strings.forEach(function (string) {

            if (string) {
                const speed = parseInt(string.getAttribute('data-speed')) || 1000;
                const originalString = string.innerHTML;
                string.innerHTML = '';

                const totalCharacters = originalString.length;
                const timePerCharacter = speed / totalCharacters;

                originalString.split('').forEach(function (char, index) {
                    setTimeout(function () {
                        string.innerHTML += char;
                    }, index * timePerCharacter);
                });
            }
        });
    } else {
        console.log('[CWP Toolkit] No typing effect elements found.');
    }
});
