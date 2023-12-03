console.log("[CWP Toolkit] Feature enabled: cwp-find-site-id.js");
document.addEventListener('DOMContentLoaded', function () {
    const backBtn = document.querySelector('#wp-admin-bar-back-website-pro');

    if (backBtn) {
        let site_id = "";
        const href = backBtn.querySelector('a.ab-item').href;

        site_id = href.replace('https://www.websiteprodashboard.com/site/', '');

        if (site_id == null || site_id == "" || site_id == 0)
            return;

        console.log('[CWP Toolkit] site_id: ' + site_id);
        displayBanner(site_id);

        function displayBanner() {
            const headerEnd = document.querySelector('#screen-meta-links');
            const wspTools = document.createElement('div');
            const dropdown = document.createElement('select');

            wspTools.id = 'cwp_wsp-tools';
            wspTools.style.position = "fixed";
            wspTools.style.bottom = "0";
            wspTools.style.right = "0";
            wspTools.style.zIndex = "10000";
            wspTools.style.margin = "0.5rem";

            const links = [
                ['Select an option...', null],
                ['Support Tool', `https://wsp-support-tools-prod.apigateway.co/site-overview/siteid/${site_id}`],
                ['Dashboard', `https://www.websiteprodashboard.com/site/${site_id}/overview`],
                ['Analytics', `https://www.websiteprodashboard.com/site/${site_id}/analytics`],
                ['Domains', `https://www.websiteprodashboard.com/site/${site_id}/domain/management`],
                ['Backups', `https://www.websiteprodashboard.com/site/${site_id}/backup/management`],
                ['Staging', `https://www.websiteprodashboard.com/site/${site_id}/staging/management`],
                ['Advanced Tools', `https://www.websiteprodashboard.com/site/${site_id}/advanced`],
                ['SFTP', `https://www.websiteprodashboard.com/site/${site_id}/advanced/sftp-key/list`],
                ['PHP Logs', `https://www.websiteprodashboard.com/site/${site_id}/advanced/php-logs`],
                ['phpMyAdmin', `https://www.websiteprodashboard.com/redirect/php-my-admin/${site_id}`],
            ];

            function handleDropdownChange() {
                const selectedOption = dropdown.options[dropdown.selectedIndex];
                if (selectedOption.value == "null")
                    return;
                if (selectedOption) {
                    const url = selectedOption.value;
                    window.open(url, '_blank');
                }
            }

            function buildHTML() {
                links.forEach(([label, url]) => {
                    const option = document.createElement('option');
                    option.textContent = label;
                    option.value = url;
                    dropdown.appendChild(option);
                });

                dropdown.addEventListener('change', handleDropdownChange);

                return dropdown;
            }

            wspTools.appendChild(buildHTML());
            headerEnd.insertAdjacentElement('afterend', wspTools);
        }
    } else {
        console.log('[CWP Toolkit] site_id not found.');
    }
});