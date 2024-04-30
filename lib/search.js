// Function to manage use of the search bar
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('searchForm');
    const input = document.getElementById('searchInput');
    const allPosts = document.querySelectorAll('.col-md-12.post-item'); // Get all post items

    form.addEventListener('submit', function (event) {
        // Prevent the default form submission - Page doesn't reload when the form is submitted.
        event.preventDefault();

        // Get the search text and remove leading/trailing spaces
        const searchText = input.value.trim().toLowerCase();

        if (searchText !== '') {
            searchForText(searchText);
        } else {
            // If search input is empty, show all posts
            allPosts.forEach(post => {
                post.style.display = '';
            });
        }
    });

    function searchForText(text) {
        // Get all elements with the 'post-title' class
        const elements = document.getElementsByClassName('post-title');

        for (let i = 0; i < elements.length; i++) {
            const element = elements[i];
            // Find in a DOM tree the element that matches with '.col-md-12', so the container of all posts
            const post = element.closest('.col-md-12');

            // Check if the element's text value contains the search text
            if (element.textContent.toLowerCase().includes(text)) {
                post.style.display = ''; // Show the post
            } else {
                post.style.display = 'none'; // Hide the post
            }
        }
    }
});

