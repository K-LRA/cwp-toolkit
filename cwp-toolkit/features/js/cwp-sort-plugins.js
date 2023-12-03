document.addEventListener('DOMContentLoaded', function () {
    const categories = document.querySelectorAll('.cwp_plugin-card-category');
    const filters = document.querySelectorAll('.cwp_plugin-category-filter');
    let categoryIndex = 0;
    let activeFilter = 'all';

    if (categories.length > 0) {
        categories.forEach((category) => {

            if (category) {
                category.style.viewTransitionName = `category-${++categoryIndex}`;
            }

        });
    }

    if (filters.length > 0) {
        filters.forEach(filter => {

            if (filter) {
                const filterAttrib = filter.getAttribute('data-filter');

                filter.addEventListener('click', () => {
                    activeFilter = filterAttrib;

                    if (!document.startViewTransition) {
                        refreshFilters();
                        refreshCategories();
                    }

                    document.startViewTransition(() => {
                        refreshFilters();
                        refreshCategories();
                    });

                });
            }
        });
    }

    function refreshFilters() {
        filters.forEach(filter => {
            const filterAttrib = filter.getAttribute('data-filter');

            filter.classList.toggle('active', filterAttrib == activeFilter);
            filter.classList.toggle('hidden', activeFilter != 'all' && filterAttrib != activeFilter);
        });
    }

    function refreshCategories() {
        categories.forEach(category => {
            const categoryAttrib = category.getAttribute('data-filter');
            category.classList.toggle('hidden', activeFilter != 'all' && categoryAttrib != activeFilter);
        });
    }
});