$(document).ready(function(){
    // Smooth scrolling for navigation links
    $('a.nav-link').click(function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800);
        }
    });

    // Contact form submission handling
    $('#contact-form').submit(function(event) {
        event.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        var message = $('#message').val();
        alert("Thank you, " + name + "! Your message has been sent.");
    });
});
