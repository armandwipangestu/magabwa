const $carousel = $('.main-carousel').flickity({
    // options
    cellAlign: 'left',
    contain: true,
    prevNextButtons: false,
    pageDots: false,
    wrapAround: true
});

$('.button--previous').on( 'click', function() {
    $carousel.flickity('previous', true);
});
$('.button--next').on( 'click', function() {
    $carousel.flickity('next', true);
});