

// change type input search to submit when has value
 
document.addEventListener('DOMContentLoaded', function () {
    var searchButton = document.getElementById('searchButton');
    var searchInput = document.getElementById('searchInput');

    searchButton.addEventListener('click', function () {
        searchInput.focus();
    });

    searchInput.addEventListener('input', function () {
        if (searchInput.value.trim() !== '') {
            searchButton.setAttribute('type', 'submit');
        } else {
            searchButton.setAttribute('type', 'button');
        }
    });
});