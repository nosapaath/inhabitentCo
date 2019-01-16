$(document).ready(function() {
  $(window).on('scroll', function() {
    let $nav = $('.site-header');

    $nav.toggleClass('scrolled', $(this).scrollTop() > $('.logo-hero').height());
})

});
