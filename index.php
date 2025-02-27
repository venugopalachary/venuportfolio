<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Venu Gopal - Portfolio</title>
    
    <!-- Bootstrap 3 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- HEADER SECTION -->
    <header>
        <div class="container-fluid">
            <!-- Desktop Navigation -->
            <nav class="desktop-nav">
                <div class="logo">
                    <h2>VENU GOPAL</h2>
                </div>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#work">Work</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <button class="btn btn-warning contact-btn">Contact Me</button>
            </nav>

            <!-- Mobile Navigation -->
            <nav class="mobile-nav">
                <div class="menu-toggle" id="open-menu">
                    <img src="assets/icons/menu.svg" alt="Menu Icon" width="30">
                </div>
                <h2 class="mobile-title">VENU GOPAL</h2>
                <div class="contact-icon">
                    <img src="assets/icons/phonecall.svg" alt="Phone Icon" width="30">
                </div>
            </nav>
        </div>
    </header>

    <!-- FULL-SCREEN MOBILE MENU -->
    <div id="mobile-menu-overlay">
        <div class="close-menu" id="close-menu">
            <img src="assets/icons/close.svg" alt="Close Icon" width="30">
        </div>
        
        <ul class="mobile-menu-list">
            <li><a href="#home" class="menu-link">Home</a></li>
            <li><a href="#about" class="menu-link">About</a></li>
            <li><a href="#work" class="menu-link">Work</a></li>
            <li><a href="#contact" class="menu-link">Contact</a></li>
        </ul>

        <!-- Social Icons -->
        <div class="social-icons">
            <div class="row">
                <img src="assets/icons/whatsapp.svg" alt="WhatsApp">
                <img src="assets/icons/telegram.svg" alt="Telegram">
            </div>
            <div class="row">
                <img src="assets/icons/github.svg" alt="GitHub">
                <img src="assets/icons/linkedin.svg" alt="LinkedIn">
                <img src="assets/icons/twitter.svg" alt="Twitter">
                <img src="assets/icons/instagram.svg" alt="Instagram">
                <img src="assets/icons/facebook.svg" alt="Facebook">
                <img src="assets/icons/dribble.svg" alt="Dribble">
            </div>
        </div>
    </div>

    <!-- HERO SECTION -->
    <section id="hero">
        <h1>Welcome to My Portfolio</h1>
        <p>Blending creativity, strategy, and technology to drive impactful solutions.</p>
        <a href="#contact" class="btn btn-warning">Get in Touch</a>
    </section>

    <!-- DUMMY SECTIONS TO TEST MENU FUNCTION -->
    <section id="home">
        <h2>Home Section</h2>
        <p>Welcome to the home section.</p>
    </section>

    <section id="about">
        <h2>About Section</h2>
        <p>Learn more about me in this section.</p>
    </section>

    <section id="work">
        <h2>Work Section</h2>
        <p>Check out my work here.</p>
    </section>

    <section id="contact">
        <h2>Contact Section</h2>
        <p>Reach out to me here.</p>
    </section>

    <!-- jQuery and Bootstrap 3 Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

    
    <!-- Sound Effects -->
    <audio id="menuOpenSound">
        <source src="assets/sounds/menu-click.mp3" type="audio/mpeg">
    </audio>

    <audio id="menuCloseSound">
        <source src="assets/sounds/menu-close.mp3" type="audio/mpeg">
    </audio>


</body>
</html>
