<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ysk Dev - Personal Website Template" />
    <meta name="author" content="Yasko" />
    <title>Yassine EL HAMIOUI - Personal Website</title>
    
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

        <div id="header">
            <div id="particles"></div>
            
            <div class="social-media-links">
                <a href="#"><img src="assets/img/instagram logo.png" class="social-media" alt="instagram-logo"></a>
                <a href="#"><img src="assets/img/facebook logo.png" class="social-media" alt="facebook-logo"></a>
                <a href="https://www.linkedin.com/in/yassine-el-hamioui-7062b0210/"><img src="assets/img/linkedin logo.png" class="social-media" alt="linkedin-logo"></a>
                <a href="#"><img src="assets/img/twitter logo.png" class="social-media" alt="twitter-logo"></a>
            </div>

            <div class="header-content">
                <div class="header-content-box">
                    <div class="firstline"><span class="color">Yassine</span> EL HAMIOUI</div>
                    <div class="secondline">
                        I'm a
                        <span class="txt-rotate color" data-period="1200" data-rotate='[ " Network Defender.", " Pentester.", " Alternant.", "Cybersecurity Specialist", "Security Enthusiast." ]'></span>
                        <span class="slash">|</span>
                    </div>
                    <div class="contact">
                        <a href="mailto:yassine.elhamiouipro@gmail.com"><img src="assets/img/mail.png" alt="email-pic" class="contactpic"></a>
                        <a href="tel:+3307846768454"><img src="assets/img/call.png" alt="phone-pic" class="contactpic"></a>
                    </div>     
                </div>
            </div>
            
            <div class="header-image">
                <img src="assets/img/f255c751bada0dfb91708475958b46ef.gif" alt="logo">
            </div>
        </div>
        
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/particles.min.js"></script>
        <script src="assets/js/index.js"></script>
        
        <script>
            particlesJS("particles", {"particles":{"number":{"value":40,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});
        </script>
    </div>
</body>
</html>