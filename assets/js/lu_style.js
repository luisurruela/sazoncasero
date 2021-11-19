'use_strict';

document.addEventListener('DOMContentLoaded', function (event) {
    

    //Popup
    $('#exampleModal').modal('show');

    $('#contact-btn').click(function (e) { 
        e.preventDefault();
        
        $('#contact-box').toggle();
    });
})