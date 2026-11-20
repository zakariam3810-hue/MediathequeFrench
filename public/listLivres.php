<?php
$titrePage = "Liste des livres";
?>

<?php
$titrePage = "Liste des livres";

$livres = [
    [
        'titre' => 'Dune',
        'auteur' => 'Frank Herbert',
        'genre' => 'Science-fiction',
        'annee' => 1965,
        'disponible' => true
    ],
    [
        'titre' => '1984',
        'auteur' => 'George Orwell',
        'genre' => 'Dystopie',
        'annee' => 1949,
        
        'disponible' => false
    ],
    [
        'titre' => 'Le Petit Prince',
        'auteur' => 'Antoine de Saint-Exupéry',
        'genre' => 'Conte',
        'annee' => 1943,
        'disponible' => true
    ]
];
?>

<?php foreach ($livres as $livre) { ?>

        <h2><?= $livre['titre'] ?></h2>
        <p>Auteur : <?= $livre['auteur'] ?></p>
        <p>Genre : <?= $livre['genre'] ?></p>
        <p>Année : <?= $livre['annee'] ?></p>

        <?php if ($livre['disponible']) { ?>
            <p>Disponible</p>
        <?php } else { ?>
            <p>Indisponible</p>
        <?php } ?>

    <?php } ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $titrePage ?></title>
</head>
<body>
    <h1><?= $titrePage ?></h1>
</body>
</html>
