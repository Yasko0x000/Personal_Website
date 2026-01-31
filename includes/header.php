<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio Yassine EL HAMIOUI - Cybersécurité & IT">
    <meta name="author" content="Yassine EL HAMIOUI">
    
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - Yassine EL HAMIOUI' : 'Portfolio - Yassine EL HAMIOUI'; ?></title>
    
    <link rel="icon" type="image/png" href="assets/img/yasko logo.png">
    
    <link rel="stylesheet" href="assets/css/index.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
</head>
<body>
    <div id="all">
        <div class="cursor"></div>
        
        <div id="loader">
            <span class="color">Yassine</span>EL HAMIOUI 
        </div>

        <div id="navigation-content">
            <div class="logo">
                <img src="assets/img/yasko logo.png" alt="logo">
            </div>
            <div class="navigation-close">
                <span class="close-first"></span>
                <span class="close-second"></span>
            </div>
            <div class="navigation-links">
                <a href="index.php" data-text="HOME" id="home-link">HOME</a>
                <a href="about.php" data-text="ABOUT" id="about-link">ABOUT</a>
                <a href="portfolio.php" data-text="PORTFOLIO" id="portfolio-link">PORTFOLIO</a>
                <a href="scolar.php" data-text="SCOLAR" id="scolar-link">SCOLARITE</a>
                <a href="contact.php" data-text="CONTACT" id="contact-link">CONTACT</a>
            </div>
        </div>

        <div id="navigation-bar">
            <img src="assets/img/yasko logo.png" alt="logo">
            <div class="menubar">
                <span class="first-span"></span>
                <span class="second-span"></span>
                <span class="third-span"></span>
            </div>
        </div>