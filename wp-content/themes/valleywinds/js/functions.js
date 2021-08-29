
// Spinoff Club
$(document).ready(function() {
    // FAQs
    $('.club-faq-question').click(function() {
        $(this).parent().toggleClass('open');
    });

    // Interruptive ads
    $('.the-spinoff-club-interruptive .dropdown-toggle').click(function() {
       $('.dropdown-menu').toggle();
    });

    // Show more Staff
    $('.more-staff').click(function() {
       $('.additional-staff').toggle();
       $(this).toggleClass('open');
       return false;
    });

    // Show more Posts
    $('.more-posts').click(function() {
        $('.additional-posts').toggle();
        $(this).toggleClass('open');
        return false;
    });

    // Mobile Staff and Posts
    if ($(window).width() < 769) {
        $('.club-tab-this-work').click(function () {
            $('.club-staff-wrapper').hide();
            $('.club-posts-wrapper').show();
            $('.club-tab').removeClass('active');
            $(this).addClass('active');
            return false;
        });

        $('.club-tab-these-people').click(function () {
            $('.club-staff-wrapper').show();
            $('.club-posts-wrapper').hide();
            $('.club-tab').removeClass('active');
            $(this).addClass('active');
            return false;
        });
    }

    // Show more FAQs
    $('.more-faqs').click(function() {
        $('.additional-faqs').show();
        $(this).hide();
        return false;
    });

});

