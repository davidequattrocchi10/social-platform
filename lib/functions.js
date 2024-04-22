
// Function to send an AJAX request to the server
function sendAjaxRequest(action, postId) {
    // New object XMLHttpRequest
    const xhr = new XMLHttpRequest();
    const url = 'actions/like_post.php';

    // Set the data to send with the POST request
    const params = 'action=' + action + '&post_id=' + postId;
    // Set the request method and URL
    xhr.open('POST', url, true);

    // Sets the Content-Type header
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    //Define the function to execute when the request completes
    xhr.onload = function () {
        if (xhr.status === 200) {
            // Manage server response
            const response = JSON.parse(xhr.responseText);
            if (response.success) {
                console.log('Azione completata con successo!');
            } else {
                console.error('Si è verificato un errore durante l\'esecuzione dell\'azione.');
            }
        } else {
            console.error('Errore nella richiesta AJAX: ' + xhr.status);
        }
    };

    // Send the request with the data
    xhr.send(params);
}

// Management of the click event on the "Like" button
document.querySelectorAll('.like-btn').forEach(function (button) {
    button.addEventListener('click', function (event) {
        const postId = event.target.dataset.postId;
        sendAjaxRequest('like', postId);

        button.classList.remove('btn-light');
        button.classList.add('btn-primary');
    });

});

// Management of the click event on the "Dislike" button
document.querySelectorAll('.unlike-btn').forEach(function (button) {
    button.addEventListener('click', function (event) {
        const postId = event.target.dataset.postId;
        sendAjaxRequest('unlike', postId);

        document.querySelector('.like-btn[data-post-id="' + postId + '"]').classList.remove('btn-primary');
        document.querySelector('.like-btn[data-post-id="' + postId + '"]').classList.add('btn-light');
    });
});

