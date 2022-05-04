

$("#X").on("click", () => {
    $("#mobile-nav").fadeOut(250);
    $("#menu-bar").show();
});

$("#menu-bar").on("click", () => {
    $("#mobile-nav").fadeIn(250);
    $("#menu-bar").hide();
});

$(window).on('scroll', () => {
    $("#mobile-nav").fadeOut(250);
})

$(window).on('load', () => {
    $("#loader").fadeOut(250);
})
