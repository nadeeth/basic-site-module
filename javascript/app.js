

$(function () {

    //Main Menu Scroll
    $(document).scroll(function () {
        var $nav = $(".navbar.fixed-top");
        $nav.toggleClass('bg-dark', $(this).scrollTop() > $nav.height());
    });

    //FullScreenHomePage Carousell
    $('.carousel-control-next').click(function() {
        $("#carouselControls").carousel('next');
    });
    $('.carousel-control-prev').click(function() {
        $("#carouselControls").carousel('prev');
    });
});
