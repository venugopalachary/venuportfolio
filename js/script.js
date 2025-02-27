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


  // hero section text animator

  const changingText = document.getElementById("changing-text");
    const words = ["Designer", "Developer", "Digital Marketer", "Financial Planner"];
    let index = 0;

    setInterval(() => {
        index = (index + 1) % words.length;
        changingText.textContent = words[index];
    }, 4000);


const swiper = new Swiper('.swiper-container', {
    slidesPerView: 4, // ✅ 4 Cards in Desktop
    spaceBetween: 20, // ✅ Adds space between cards
    loop: true,
    autoplay: {
        delay: 0, // ✅ Smooth continuous scrolling
        disableOnInteraction: false,
    },
    speed: 4000, // ✅ Slower movement for better readability
    grabCursor: true,

    // ✅ RESPONSIVE BREAKPOINTS
    breakpoints: {
        320: { slidesPerView: 2, spaceBetween: 10 }, // ✅ 2 Cards in Mobile
        768: { slidesPerView: 3, spaceBetween: 15 }, // ✅ 3 Cards in Tablets
        1024: { slidesPerView: 4, spaceBetween: 20 } // ✅ 4 Cards in Desktop
    }
});




});
