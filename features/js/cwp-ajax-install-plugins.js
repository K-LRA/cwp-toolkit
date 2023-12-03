document.addEventListener('DOMContentLoaded', function () {
    var buttons = document.querySelectorAll('.cwp_button.cwp_not_installed');

    buttons.forEach(function (button) {
        button.addEventListener('click', function (e) {
            e.preventDefault();

            var pluginSlug = this.getAttribute('plugin-slug');

            // Make the AJAX request using the Fetch API
            fetch(ajax_object.ajax_url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'action=install_plugin&plugin_slug=' + encodeURIComponent(pluginSlug) + '&nonce=' + encodeURIComponent(ajax_object.nonce),
            })
                .then(function (response) {
                    return response.json();
                })
                .then(function (result) {
                    if (result.success) {
                        console.log('Plugin installed successfully');
                        // Optionally, you can reload the page or perform other actions
                    } else {
                        console.error('Plugin installation failed');
                    }
                })
                .catch(function (error) {
                    console.error('Error during AJAX request:', error);
                });
        });
    });
});
