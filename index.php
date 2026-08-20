<?php
  $json = file_get_contents(__DIR__ . '/data/menu.json');
  $menu = json_decode($json, true);

  $platDuJour = $menu['plat_du_jour'];
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Le Bourguignon - Accueil</title>

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Cormorant+Garamond:wght@300;400;500&family=Inter:wght@300;400;500&display=swap" rel="stylesheet"/>

        <link rel="stylesheet" href="assets/css/style.css" />
    </head>
    <body>
        
        <div class="menu-overlay" id="menuOverlay">
            <div class="menu-backdrop" onclick="fermerMenu()"></div>
            <div class="menu-panel">
                <div class="menu-panel-head">
                    <div class="brand">Le Bourguignon</div>
                    <div class="tagline">Brasserie · Claye-Souilly</div>
                    <button class="menu-panel-close" onclick="fermerMenu()">✕</button>
                </div>

                <div class="menu-panel-links">
                    <span class="nav-sep">Navigation</span>
                    <a href="index.php">Accueil</a>
                    <a href="carte.php">La Carte</a>
                    <a href="restaurant.php">Le Restaurant</a>
                    <a href="infos-pratiques.php">Infos Pratiques</a>
                    <span class="nav-sep">Contact</span>
                    <a href="tel:0160260196">01 60 26 01 96</a>
                    <a href="tel:0626845030">06 26 84 50 30</a>
                </div>

                <div class="menu-panel-footer">
                    Centre Commercial Claye-Souilly<br />
                    RN2 – 77410 Claye-Souilly<br />
                    Lun–Sam 8h–20h · Dim 8h–19h
                </div>
            </div>
        </div>
        <nav>
            <button class="nav-burger" onclick="ouvrirMenu()" aria-label="Ouvrir le menu">☰</button>
            <a class="nav-logo" href="index.php" style="text-decoration: none">Le Bourguignon</a>
            <a class="nav-cta" href="tel:0160260196">Appeler</a>
        </nav>

        <main>
            <section class="hero">
                <img class="hero-img" src="assets/img/facade.jpg" alt="Salle du Bourguignon" />
                <div class="hero-overlay"></div>
                <div class="hero-content">
                    <p class="hero-eyebrow">Brasserie · Claye-Souilly</p>
                    <h1 class="hero-title">Le<br />Bourguignon</h1>
                    <p class="hero-subtitle">Restauration traditionnelle &amp; rapide</p>
                    <div class="hero-meta">
                        <div class="hero-meta-item">
                            <strong>Adresse</strong>
                            Centre Commercial Claye-Souilly<br />RN2 – 77410 Claye-Souilly
                        </div>
                        <div class="hero-meta-sep"></div>
                        <div class="hero-meta-item">
                            <strong>Horaires</strong>
                            Lundi – Samedi 8:00–20:00<br />Dimanche 8:00–19:00
                        </div>
                        <div class="hero-meta-sep"></div>
                        <div class="hero-meta-item">
                            <strong>Téléphone</strong>
                            01 60 26 01 96<br />06 26 84 50 30
                        </div>
                        <a class="hero-cta" href="carte.php">Voir la carte →</a>
                    </div>
                </div>
            </section>

            <section class="plat-du-jour">
                <div>
                    <p class="plat-label">Plat</p>
                    <p class="plat-title-big">Du<br />Jour</p>
                </div>
                <div>
                    <p class="plat-desc"><?= htmlspecialchars($platDuJour['nom']) ?></p>
                    <?php if (!empty($platDuJour['accompagnement'])): ?>
                    <p class="plat-sub"><?= htmlspecialchars($platDuJour['accompagnement']) ?></p>
                    <?php endif; ?>
                </div>
            </section>

            <section class="cards-section">
                <a class="card" href="carte.php">
                    <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=600&q=70" alt="La carte" />
                    <div class="card-label">Voir la Carte</div>
                </a>
                <a class="card" href="restaurant.php">
                    <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=600&q=70" alt="Le restaurant" />
                    <div class="card-label">Le Restaurant</div>
                </a>
                <a class="card" href="infos-pratiques.php">
                    <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=600&q=70" alt="Infos pratiques"/>
                    <div class="card-label">Infos Pratiques</div>
                </a>
            </section>
        </main>

        <footer>
            <div class="footer-brand">Le Bourguignon</div>
            <p class="footer-tagline">Brasserie – Restauration traditionnelle &amp; rapide</p>

            <div class="footer-grid">
                <div>
                    Centre Commercial Claye-Souilly<br />
                    RN2 77410 Claye-Souilly<br />
                    01 60 26 01 96<br />
                    06 26 84 50 30
                </div>
                <div class="footer-hours" style="text-align: right">
                    <strong>Lundi – Samedi</strong> 8:00–20:00 <strong style="margin-top: 6px">Dimanche</strong> 8:00–19:00
                </div>
            </div>

            <div class="footer-nav">
                <a href="carte.php">Carte</a>
                <a href="restaurant.php">Le Restaurant</a>
                <a href="infos-pratiques.php">Infos Pratiques</a>
            </div>

            <p class="footer-copy">© 2026 – Le Bourguignon · Tous droits réservés.</p>
        </footer>

        <script src="assets/js/app.js"></script>
    </body>
</html>
