
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('navbar');
    const logo = document.getElementById('logo');
    const navlink = document.getElementById('navlink');
    const toggler = document.getElementById('toggler');
    let lastScrollTop = 0;

    window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop) {
            // Scrolling down
            navbar.classList.add('shrink');
            logo.classList.add('shrink');
            navlink.classList.add('shrink');
            toggler.classList.add('shrink');
        } else {
            // Scrolling up
            if (scrollTop === 0) {
                navbar.classList.remove('shrink');
                logo.classList.remove('shrink');
                navlink.classList.remove('shrink');
                toggler.classList.remove('shrink');
            }
        }

        lastScrollTop = scrollTop;
    });
});












// THIS HIDING HTML EXTENTION IN BROWSER
// if (window.history && window.history.pushState) {
//     window.history.pushState({}, document.title, window.location.pathname.replace('.html', ''));
// }


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