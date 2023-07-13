$(document).ready(function () {
    var isScrolling = false;

    $(document).on("scroll", onScroll);

    $('nav li a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        if (isScrolling) return;

        isScrolling = true;
        $(document).off("scroll");

        $('nav li a').removeClass('active');
        $(this).addClass('active');

        var target = this.hash;
        $target = $(target);
        var offset = $target.offset().top;

        $('html, body').stop().animate({
            scrollTop: offset
        }, 800, 'easeInOutExpo', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
            isScrolling = false;
        });
    });
});

function onScroll(event) {
    var scrollPosition = $(document).scrollTop();
    $('nav a').each(function () {
        var currentLink = $(this);
        var refElement = $(currentLink.attr("href"));
        if (refElement.position().top <= scrollPosition && refElement.position().top + refElement.height() > scrollPosition) {
            $('nav a').removeClass("active");
            currentLink.addClass("active");
        }
        else {
            currentLink.removeClass("active");
        }
    });
}
