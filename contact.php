<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ysk Dev - Personal scolar Website Template" />
    <meta name="keywords" content="portfolio, business card, creative, creative scolar, cv theme, online resume, personal, scolar, professional cv, responsive scolar, resume, resume theme, vcard" />
    <meta name="author" content="Yasko" />
    <title>Yassine EL HAMIOUI - Personal scolar Website</title>
    <!--favicon-img-->
    <link rel="icon" type="image/png" href="images/yasko logo.png">
    <!--favicon-img-->
    <!--main css file should not be removed -->
    <link rel="stylesheet" href="css/index.css">
    <!--main css file-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
</head>
<body>
    <!--contains all the div-->
    <div id="all">
        <!--mouse  follower-->
        <div class="cursor"></div>
        <!--mouse  follower-->
        <!--loader-->
        <div id="loader">
            <span class="color">Yassine</span>EL HAMIOUI 
        </div>
        <!--loader-end-->
        <!--link-screen-->
        <div id="breaker">
        </div>
        <div id="breaker-two">
        </div>
        <!--link-screen-->
        <!--Main-Section-->
        <!--Navigator-fullscreen-->
        <div id="navigation-content">
            <div class="logo">
                <img src="images/yasko logo.png" alt="logo">
            </div>
            <div class="navigation-close">
                <span class="close-first"></span>
                <span class="close-second"></span>
            </div>
            <div class="navigation-links">
                <a href="index.html" data-text="HOME" id="home-link">HOME</a>
                <a href="about.html" data-text="ABOUT" id="about-link">ABOUT</a>
                <a href="portfolio.html" data-text="portfolio" id="portfolio-link">portfolio</a>
                <a href="#" data-text="scolar" id="scolar-link">scolar</a>
                <a href="#" data-text="CONTACT" id="contact-link">CONTACT</a>
            </div>
        </div>
        
        <!--Menubar-->
        <div id="navigation-bar">
            <img src="images/yasko logo.png" alt="logo">
            <div class="menubar">
                <span class="first-span"></span>
                <span class="second-span"></span>
                <span class="third-span"></span>
            </div>
        </div>
        <!--Menubar End-->

    <!--contact-->
    <div class="color-changer">
        <div class="color-panel">
            <img src="images/gear.png" alt="">
        </div>
        <div class="color-selector">
            <div class="heading">Custom Colors</div>
            <div class="colors">
                <ul>
                    <li><a href="#0" class="color-red" title="color-red"></a></li>
                    <li><a href="#0" class="color-purple" title="color-purple"></a></li>
                    <li><a href="#0" class="color-malt" title="color-malt"></a></li>
                    <li><a href="#0" class="color-green" title="color-green"></a></li>
                    <li><a href="#0" class="color-blue" title="color-blue"></a></li>
                    <li><a href="#0" class="color-orange" title="color-orange"></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="contact-header">Contact <span class="color"> Me</span>
        <div class="contact-header-caption"> <span class="color"> Get</span> In Touch.</div>
    </div>
    <div class="contact-content">
        <!--Contact form-->
        <div class="contact-form">
            <div class="form-header">
                Message Me
            </div>
            <form id="myForm">
                <div class="input-line">
                    <input id="name" type="text" placeholder="Votre nom" class="input-name" required>
                    <input id="email" type="email" placeholder="Votre email" class="input-name" required>
                </div>
                <input type="text" id="subject" placeholder="Sujet" class="input-subject" required>
                <textarea id="body" class="input-textarea" placeholder="Message" required></textarea>
                <button type="submit" id="submit">Submit</button>
            </form>
        </div>
        <!--Contact form end-->

        <!--Contact information-->
        <div class="contact-info">
            <div class="contact-info-header">
                Contact Info
            </div>
            <div class="contact-info-content">
                <div class="contect-info-content-line">
                    <img src="./images/icon-name.png" class="icon" alt="name-icon">
                    <div class="contact-info-icon-text">
                        <h6>Name</h6>
                        <p>Yassine EL HAMIOUI</p>
                    </div>
                </div>
                <div class="contect-info-content-line">
                    <img src="./images/icon-location.png" class="icon" alt="location-icon">
                    <div class="contact-info-icon-text">
                        <h6>Location</h6>
                        <p>France</p>
                    </div>
                </div>
                <div class="contect-info-content-line">
                    <img src="./images/icon-phone.png" class="icon" alt="phone-icon">
                    <div class="contact-info-icon-text">
                        <h6>Call</h6>
                        <p>+33 (0)7 84 67 68 54</p>
                    </div>
                </div>
                <div class="contect-info-content-line">
                    <img src="./images/icon-email.png" class="icon" alt="email-icon">
                    <div class="contact-info-icon-text">
                        <h6>Email</h6>
                        <p>yassine.elhamiouipro@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <!--Contact information end-->
    </div>
    <!--contact end-->

    <!--footer-->
    <div class="footer">
        <div class="footer-text">
            <img src="./images/copyright.png" alt="copyright-img" class="images" height="14px"> Ysk Dev
        </div>
    </div>
    <!--footer end-->

    <!-- External JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/particles.min.js"></script>
    <script src="js/index.js"></script>

    <!-- EmailJS and form submission script -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script>
        (function() {
            // Initialisation avec votre clé publique EmailJS
            emailjs.init("lJuYLSjW3jwlCW4nt");

            // Ajouter un écouteur d'événement sur le formulaire
            document.getElementById("myForm").addEventListener("submit", function(event) {
                event.preventDefault(); // Empêche l'envoi par défaut du formulaire

                // Récupération des données du formulaire
                var formData = {
                    name: document.getElementById("name").value,
                    email: document.getElementById("email").value,
                    subject: document.getElementById("subject").value,
                    message: document.getElementById("body").value
                };

                // Affiche les données pour vérifier qu'elles sont correctes
                console.log("Données avant envoi : ", formData);

                // Envoi du formulaire via EmailJS
                emailjs.send("service_4llagjg", "template_e9a5xe7", formData)
                    .then(function(response) {
                        console.log("Message envoyé avec succès", response);
                        alert("Message envoyé avec succès !");
                        document.getElementById("myForm").reset(); // Réinitialise le formulaire
                    }, function(error) {
                        console.log("Échec de l'envoi du message", error);
                        alert("Échec de l'envoi du message. Détails : " + error.text);
                    });
            });
        })();
    </script>
</body>
</html>
