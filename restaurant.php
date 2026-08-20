<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Le Bourguignon - Le Restaurant</title>

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Cormorant+Garamond:wght@300;400;500&family=Inter:wght@300;400;500&display=swap"
            rel="stylesheet"
        />

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
            <section class="resto-hero">
                <img src="assets/img/bblogo.jpg" alt="Salle du Bourguignon" />
                <div class="resto-hero-content">
                    <p class="resto-hero-eyebrow">Claye-Souilly</p>
                    <h1 class="resto-hero-title">Le<br />Restaurant</h1>
                </div>
            </section>

            <div class="resto-body">
                <section class="resto-intro">
                    <div class="resto-intro-text">
                        <p>
                            Situé à Claye-Souilly, Le Bourguignon est une brasserie qui accueille ses clients dans une
                            ambiance conviviale et chaleureuse.
                        </p>
                        <p>
                            Le restaurant propose une carte variée avec des entrées, salades, pizzas, burgers, viandes,
                            poissons, pâtes, desserts et boissons.
                        </p>
                        <p>
                            Le but est de proposer une restauration accessible pour différents moments de la journée,
                            que ce soit pour un déjeuner, un repas entre amis ou une pause.
                        </p>
                    </div>

                    <div class="resto-intro-visual">
                        <img
                            src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=700&q=80"
                            alt="Plats du restaurant"
                        />
                        <img
                            src="https://images.unsplash.com/photo-1466978913421-dad2ebd01d17?w=700&q=80"
                            alt="Ambiance brasserie"
                        />
                    </div>
                </section>

                <section class="resto-galerie">
                    <img
                        src="https://images.unsplash.com/photo-1424847651672-bf20a4b0982b?w=500&q=75"
                        alt="Salle du restaurant"
                    />
                    <img src="https://images.unsplash.com/photo-1551218808-94e220e084d2?w=500&q=75" alt="Cuisine" />
                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=500&q=75" alt="Plats" />
                    <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=500&q=75" alt="Restaurant" />
                    <img
                        src="https://images.unsplash.com/photo-1578474846511-04ba529f0b88?w=500&q=75"
                        alt="Intérieur"
                    />
                    <img src="https://images.unsplash.com/photo-1515669097368-22e68427d265?w=500&q=75" alt="Terrasse" />
                </section>

                <section class="resto-values">
                    <div class="resto-value">
                        <div class="resto-value-title">Carte variée</div>
                        <div class="resto-value-text">Plusieurs types de plats pour répondre à différentes envies.</div>
                    </div>

                    <div class="resto-value">
                        <div class="resto-value-title">Horaires larges</div>
                        <div class="resto-value-text">
                            Le restaurant accueille ses clients tout au long de la journée.
                        </div>
                    </div>

                    <div class="resto-value">
                        <div class="resto-value-title">Convivialité</div>
                        <div class="resto-value-text">Une ambiance simple et chaleureuse.</div>
                    </div>
                </section>
            </div>

            <section class="resto-cta-band">
                <h2>Envie de nous rendre visite ?</h2>
                <p>Retrouvez toutes les informations utiles avant de venir.</p>
                <a class="btn-white" href="infos-pratiques.php">Voir les infos pratiques</a>
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
                    <strong>Lundi – Samedi</strong> 8:00–20:00
                    <strong style="margin-top: 6px">Dimanche</strong> 8:00–19:00
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
