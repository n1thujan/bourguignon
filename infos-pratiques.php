<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Le Bourguignon - Infos Pratiques</title>

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
            <header class="infos-header">
                <p class="infos-header-eyebrow">Comment nous trouver</p>
                <h1>Infos<br />Pratiques</h1>
                <p>Tout ce qu'il faut savoir pour nous rendre visite.</p>
            </header>

            <div class="infos-body">
                <div class="infos-top">
                    <section class="info-card">
                        <h2 class="info-card-title">Adresse &amp; Contact</h2>

                        <div class="info-adresse-line">
                            <div class="info-adresse-text">
                                <strong>Adresse</strong>
                                Brasserie Le Bourguignon<br />
                                Centre Commercial Claye-Souilly<br />
                                RN2 – 77410 Claye-Souilly
                            </div>
                        </div>

                        <div class="info-adresse-line">
                            <div class="info-adresse-text">
                                <strong>Téléphone</strong>
                                <a href="tel:0160260196">01 60 26 01 96</a><br />
                                <a href="tel:0626845030">06 26 84 50 30</a>
                            </div>
                        </div>

                        <div class="info-btn-group">
                            <a href="tel:0160260196" class="info-btn info-btn-primary">Appeler</a>
                        </div>
                    </section>

                    <section class="info-card">
                        <h2 class="info-card-title">Horaires d'ouverture</h2>

                        <table class="horaires-table">
                            <tr>
                                <td>Lundi</td>
                                <td>8:00 – 20:00</td>
                            </tr>
                            <tr>
                                <td>Mardi</td>
                                <td>8:00 – 20:00</td>
                            </tr>
                            <tr>
                                <td>Mercredi</td>
                                <td>8:00 – 20:00</td>
                            </tr>
                            <tr>
                                <td>Jeudi</td>
                                <td>8:00 – 20:00</td>
                            </tr>
                            <tr>
                                <td>Vendredi</td>
                                <td>8:00 – 20:00</td>
                            </tr>
                            <tr>
                                <td>Samedi</td>
                                <td>8:00 – 20:00</td>
                            </tr>
                            <tr>
                                <td>Dimanche</td>
                                <td>8:00 – 19:00</td>
                            </tr>
                        </table>
                    </section>
                </div>

                <section class="infos-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2618.4!2d2.678!3d48.936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60ee45cb3547d%3A0x2b30b5d6e5f57a45!2sCentre%20Commercial%20Claye-Souilly!5e0!3m2!1sfr!2sfr!4v1700000000000"
                        allowfullscreen
                        loading="lazy"
                        title="Localisation Le Bourguignon"
                    >
                    </iframe>
                </section>
            </div>
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
