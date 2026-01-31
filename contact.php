<?php 
$pageTitle = "Contact";
include 'includes/header.php'; 
?>

<div id="contact" style="display:block;"> <div class="color-changer">
        <div class="color-panel"><img src="assets/img/gear.png" alt=""></div>
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
        <div class="contact-form">
            <div class="form-header">Message Me</div>
            <form id="myForm">
                <div class="input-line">
                    <input id="name" type="text" placeholder="Votre nom" class="input-name" required>
                    <input id="email" type="email" placeholder="Votre email" class="input-name" required>
                </div>
                <input type="text" id="subject" placeholder="Sujet" class="input-subject" required>
                <textarea id="body" class="input-textarea" placeholder="Message" required></textarea>
                <button type="submit" id="submit">Envoyer</button>
            </form>
        </div>

        <div class="contact-info">
            <div class="contact-info-header">Contact Info</div>
            <div class="contact-info-content">
                <div class="contect-info-content-line">
                    <img src="assets/img/icon-name.png" class="icon" alt="name-icon">
                    <div class="contact-info-icon-text">
                        <h6>Name</h6>
                        <p>Yassine EL HAMIOUI</p>
                    </div>
                </div>
                <div class="contect-info-content-line">
                    <img src="assets/img/icon-location.png" class="icon" alt="location-icon">
                    <div class="contact-info-icon-text">
                        <h6>Location</h6>
                        <p>France</p>
                    </div>
                </div>
                <div class="contect-info-content-line">
                    <img src="assets/img/icon-phone.png" class="icon" alt="phone-icon">
                    <div class="contact-info-icon-text">
                        <h6>Call</h6>
                        <p>+33 (0)7 84 67 68 54</p>
                    </div>
                </div>
                <div class="contect-info-content-line">
                    <img src="assets/img/icon-email.png" class="icon" alt="email-icon">
                    <div class="contact-info-icon-text">
                        <h6>Email</h6>
                        <p>yassine.elhamiouipro@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
<script>
    (function() {
        emailjs.init("lJuYLSjW3jwlCW4nt");
        document.getElementById("myForm").addEventListener("submit", function(event) {
            event.preventDefault();
            var formData = {
                name: document.getElementById("name").value,
                email: document.getElementById("email").value,
                subject: document.getElementById("subject").value,
                message: document.getElementById("body").value
            };
            emailjs.send("service_4llagjg", "template_e9a5xe7", formData)
                .then(function(response) {
                    alert("Message envoyé avec succès !");
                    document.getElementById("myForm").reset();
                }, function(error) {
                    alert("Échec de l'envoi. Détails : " + error.text);
                });
        });
    })();
</script>

<?php include 'includes/footer.php'; ?>