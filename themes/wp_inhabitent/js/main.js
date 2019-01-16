$(document).ready(function() {
  $(window).on('scroll', function() {
    let $nav = $('.site-header');
    
    const $height = 800;

    $nav.toggleClass('scrolled', $(this).scrollTop() > $('.logo-hero').height());
})

});
