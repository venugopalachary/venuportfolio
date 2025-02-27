$(document).ready(function () {
    // Function to play the menu open sound
    function playMenuOpenSound() {
        let openSound = document.getElementById("menuOpenSound");
        openSound.play();
    }

    // Function to play the menu close sound
    function playMenuCloseSound() {
        let closeSound = document.getElementById("menuCloseSound");
        closeSound.play();
    }

    // Open menu action
    $("#open-menu").click(function () {
        $("#mobile-menu-overlay").fadeIn();
        $(".desktop-nav").fadeOut();
        playMenuOpenSound(); // ✅ Play sound when menu opens
    });

    // Close menu action
    $("#close-menu").click(function () {
        $("#mobile-menu-overlay").fadeOut();
        $(".desktop-nav").fadeIn();
        playMenuCloseSound(); // ✅ Play sound when menu closes
    });

    // Close menu when clicking a menu item and navigate to section
    $(".menu-link").click(function () {
        $("#mobile-menu-overlay").fadeOut();
        $(".desktop-nav").fadeIn();
        playMenuCloseSound(); // ✅ Play sound when menu item is clicked (acts as close action)

        // Smooth Scroll to Section
        let target = $(this).attr("href");
        $("html, body").animate({
            scrollTop: $(target).offset().top
        }, 800);
    });
});
