<?php 
// 1. On définit le titre de la page
$pageTitle = "Mes Projets";

// 2. On charge le header commun
include 'includes/header.php'; 

// 3. On récupère les projets depuis le fichier JSON
$json_source = file_get_contents('assets/data/projets.json');
$projets = json_decode($json_source, true);
?>

<div id="portfolio" style="display:block;"> <div class="portfolio-header">
        <span class="color">PORTFOLIO</span>
        <span class="header-caption">Mes Derniers <span class="color">Projets</span></span>
    </div>

    <div class="portfolio-content">
        
        <?php 
        // 4. BOUCLE PHP : Pour chaque projet trouvé dans le JSON...
        if ($projets && count($projets) > 0):
            foreach ($projets as $projet): 
        ?>
            
            <div class="portfolios">
                <a href="<?php echo $projet['lien']; ?>" target="_blank">
                    <div class="img">
                        <img src="<?php echo $projet['image']; ?>" alt="<?php echo $projet['titre']; ?>">
                        <div class="portfolio-date"><?php echo $projet['date']; ?></div>
                    </div>
                    <div class="portfolio-text">
                        <h3><?php echo $projet['titre']; ?></h3>
                        <p><?php echo $projet['description']; ?></p>
                        
                        <div class="tags" style="margin-top:10px;">
                            <?php foreach($projet['tags'] as $tag): ?>
                                <span style="font-size:0.8em; background:#333; padding:2px 6px; border-radius:4px; margin-right:5px; color:#fff;">
                                    #<?php echo $tag; ?>
                                </span>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </a>
            </div>
            <?php 
            endforeach; 
        else:
        ?>
            <p style="text-align:center; color:white;">Aucun projet trouvé pour le moment.</p>
        <?php endif; ?>

    </div>
</div>

<?php 
// 5. On charge le footer commun
include 'includes/footer.php'; 
?>