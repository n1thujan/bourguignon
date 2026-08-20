<?php

$json = file_get_contents(__DIR__ . '/data/menu.json');
$menu = json_decode($json, true);
$carte = $menu['carte'];

$categories = [
  'entrees' => 'Entrées & Encas',
  'salades' => 'Salades',
  'pizzas' => 'Pizzas',
  'burgers' => 'Burgers',
  'viandes' => 'Viandes',
  'viandes rouges' => 'Viandes rouges',
  'poissons' => 'Poissons',
  'pates' => 'Pâtes',
  'desserts' => 'Desserts',
  'boissons' => 'Boissons',
  'alcools' => 'Alcools'
];
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Le Bourguignon - La Carte</title>

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
            <div class="carte-header">
                <h1 class="carte-title">La Carte</h1>

                <div class="carte-nav-tabs">
                    <?php $premiereCategorie = true; ?> <?php foreach ($categories as $cle => $nomCategorie): ?>
                    <button
                        class="tab <?= $premiereCategorie ? 'active' : '' ?>"
                        onclick="afficherCategorie('<?= htmlspecialchars($cle) ?>', this)"
                    >
                        <?= htmlspecialchars($nomCategorie) ?>
                    </button>
                    <?php $premiereCategorie = false; ?> <?php endforeach; ?>
                </div>
            </div>

            <?php $premiereCategorie = true; ?> <?php foreach ($categories as $cle => $nomCategorie): ?>
            <section
                id="categorie-<?= htmlspecialchars($cle) ?>"
                class="carte-section <?= $premiereCategorie ? '' : 'hidden' ?>"
            >
                <h2 class="section-title"><?= htmlspecialchars($nomCategorie) ?></h2>

                <?php if (!empty($carte[$cle])): ?> <?php foreach ($carte[$cle] as $plat): ?>
                <div class="menu-item">
                    <div>
                        <div class="menu-item-name"><?= htmlspecialchars($plat['nom']) ?></div>

                        <?php if (!empty($plat['desc'])): ?>
                        <div class="menu-item-desc"><?= htmlspecialchars($plat['desc']) ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="menu-item-price"><?= number_format((float)$plat['prix'], 2, ',', ' ') ?> €</div>
                </div>
                <?php endforeach; ?> <?php else: ?>
                <p style="text-align: center; padding: 24px 0">Aucun plat disponible.</p>
                <?php endif; ?>
            </section>
            <?php $premiereCategorie = false; ?> <?php endforeach; ?>
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
