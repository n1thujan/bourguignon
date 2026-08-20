<?php
    require_once 'functions.php';
    verifierConnexion();

    $menu = chargerMenu();

    $categories = [
        'entrees',
        'salades',
        'pizzas',
        'burgers',
        'viandes',
        'viandes rouges',
        'poissons',
        'pates',
        'desserts',
        'boissons',
        'alcools'
    ];

    $labels = [
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

    $message = '';
    if (isset($_POST['save_plat'])) {
        $menu['plat_du_jour']['nom'] = trim($_POST['plat_nom']);
        $menu['plat_du_jour']['accompagnement'] = trim($_POST['plat_acc']);
        enregistrerMenu($menu);
        $message = 'Plat du jour mis à jour.';
    }
    if (isset($_POST['add_item'])) {
        $categorie = $_POST['categorie'];
        if (in_array($categorie, $categories)) {
            $menu['carte'][$categorie][] = [
                'nom' => trim($_POST['item_nom']),
                'desc' => trim($_POST['item_desc']),
                'prix' => trim($_POST['item_prix'])
            ];
            enregistrerMenu($menu);
            $message = 'Plat ajouté.';
        }
    }

    if (isset($_POST['add_item'])) {
        $categorie = $_POST['categorie'];
        if (in_array($categorie, $categories)) {
            $menu['carte'][$categorie][] = [
                'nom' => trim($_POST['item_nom']),
                'desc' => trim($_POST['item_desc']),
                'prix' => trim($_POST['item_prix'])
            ];
            enregistrerMenu($menu);
            $message = 'Plat ajouté.';
        }
    }

    if (isset($_POST['edit_item'])) {
        $categorie = $_POST['edit_cat'];
        $index = (int) $_POST['edit_idx'];
        if (isset($menu['carte'][$categorie][$index])) {
            $menu['carte'][$categorie][$index] = [
                'nom' => trim($_POST['edit_nom']),
                'desc' => trim($_POST['edit_desc']),
                'prix' => trim($_POST['edit_prix'])
            ];
            enregistrerMenu($menu);
            $message = 'Plat modifié.';
        }
    }


    if (isset($_GET['delete']) && isset($_GET['cat']) && isset($_GET['idx'])) {
        $categorie = $_GET['cat'];
        $index = (int) $_GET['idx'];
        if (isset($menu['carte'][$categorie][$index])) {
            array_splice($menu['carte'][$categorie], $index, 1);
            enregistrerMenu($menu);
            $message = 'Plat supprimé.';
        }
    }

    $menu = chargerMenu();

    $categorieActive = 'entrees';

    if (isset($_GET['cat']) && in_array($_GET['cat'], $categories)) {
        $categorieActive = $_GET['cat'];
    }

    $indexEdition = -1;

    if (isset($_GET['edit'])) {
        $indexEdition = (int) $_GET['edit'];
    }
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Administration - Le Bourguignon</title>
        <link rel="stylesheet" href="css/admin.css" />
    </head>
    <body>
        <header class="admin-header">
            <h1>Admin - Le Bourguignon</h1>
            <div>
                <a href="../index.php" target="_blank">Voir le site</a>
                &nbsp; | &nbsp;
                <a href="logout.php">Déconnexion</a>
            </div>
        </header>

        <div class="admin-layout">
            <nav class="sidebar">
                <div class="sidebar-title">Général</div>
                <a href="index.php">Plat du jour</a>
                <div class="sidebar-title">Carte</div>
                <?php foreach ($categories as $categorie): ?>
                <a href="?cat=<?= urlencode($categorie) ?>" class="<?= $categorieActive === $categorie && isset($_GET['cat']) ? 'active' : '' ?>">
                    <?= $labels[$categorie] ?>
                </a>
                <?php endforeach; ?>
            </nav>

            <main class="main">
                <?php if ($message != ''): ?>
                <div class="message"><?= htmlspecialchars($message) ?></div>
                <?php endif; ?> <?php if (!isset($_GET['cat'])): ?>

                <div class="card">
                    <h2>Plat du jour</h2>

                    <form method="post">
                        <div class="form-group">
                            <label>Nom du plat</label>
                            <input type="text" name="plat_nom" value="<?= htmlspecialchars($menu['plat_du_jour']['nom']) ?>" required/>
                        </div>

                        <div class="form-group">
                            <label>Accompagnement</label>
                            <input type="text" name="plat_acc" value="<?= htmlspecialchars($menu['plat_du_jour']['accompagnement']) ?>"/>
                        </div>

                        <button class="btn" name="save_plat">Enregistrer</button>
                    </form>
                </div>

                <?php else: ?>

                <div class="card">
                    <h2><?= $labels[$categorieActive] ?></h2>

                    <form method="post">
                        <input type="hidden" name="categorie" value="<?= htmlspecialchars($categorieActive) ?>" />

                        <div class="form-row">
                            <div class="form-group">
                                <label>Nom</label>
                                <input type="text" name="item_nom" required />
                            </div>

                            <div class="form-group">
                                <label>Prix</label>
                                <input type="text" name="item_prix" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="item_desc"></textarea>
                        </div>

                        <button class="btn" name="add_item">Ajouter</button>
                    </form>

                    <?php if (!empty($menu['carte'][$categorieActive])): ?>

                    <table>
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Prix</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($menu['carte'][$categorieActive] as $i => $item): ?> <?php if ($indexEdition
                            === $i): ?>

                            <tr>
                                <td colspan="4">
                                    <form method="post">
                                        <input
                                            type="hidden"
                                            name="edit_cat"
                                            value="<?= htmlspecialchars($categorieActive) ?>"
                                        />

                                        <input type="hidden" name="edit_idx" value="<?= $i ?>" />

                                        <div class="form-row">
                                            <div class="form-group">
                                                <label>Nom</label>
                                                <input
                                                    type="text"
                                                    name="edit_nom"
                                                    value="<?= htmlspecialchars($item['nom']) ?>"
                                                    required
                                                />
                                            </div>

                                            <div class="form-group">
                                                <label>Prix</label>
                                                <input
                                                    type="text"
                                                    name="edit_prix"
                                                    value="<?= htmlspecialchars($item['prix']) ?>"
                                                    required
                                                />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="edit_desc"><?= htmlspecialchars($item['desc']) ?></textarea>
                                        </div>

                                        <button class="btn" name="edit_item">Enregistrer</button>

                                        <a class="btn btn-outline" href="?cat=<?= urlencode($categorieActive) ?>">
                                            Annuler
                                        </a>
                                    </form>
                                </td>
                            </tr>

                            <?php else: ?>

                            <tr>
                                <td><?= htmlspecialchars($item['nom']) ?></td>
                                <td><?= htmlspecialchars($item['desc']) ?></td>
                                <td>
                                    <?= number_format((float) $item['prix'], 2, ',', '') ?>
                                    €
                                </td>

                                <td>
                                    <div class="actions">
                                        <a
                                            class="btn btn-outline"
                                            href="?cat=<?= urlencode($categorieActive) ?>&edit=<?= $i ?>"
                                        >
                                            Modifier
                                        </a>

                                        <a
                                            class="btn btn-danger"
                                            href="?cat=<?= urlencode($categorieActive) ?>&delete=1&idx=<?= $i ?>"
                                            onclick="return confirm('Supprimer ce plat ?')"
                                        >
                                            Supprimer
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <?php endif; ?> <?php endforeach; ?>
                        </tbody>
                    </table>

                    <?php else: ?>

                    <p>Aucun plat dans cette catégorie.</p>

                    <?php endif; ?>
                </div>

                <?php endif; ?>
            </main>
        </div>
    </body>
</html>
