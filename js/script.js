// THIS HIDING HTML EXTENTION IN BROWSER
if (window.history && window.history.pushState) {
    window.history.pushState({}, document.title, window.location.pathname.replace('.html', ''));
}


//  CODE TO CONFIGURE SCROLL UP BUTTON
$(document).ready(function() {
    // Show or hide the scroll up button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
            $('#scrollUpBtn').fadeIn();
        } else {
            $('#scrollUpBtn').fadeOut();
        }
    });

    // Scroll to top when the button is clicked
    $('#scrollUpBtn').click(function() {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });
});