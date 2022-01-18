<?php
    include_once('./classes/User.php');
    include_once('./classes/Article.php');
    include_once('./classes/Produit.php');
    include_once('./classes/Category.php');

    $user = new User('DUPONT', 'Paul', 'paul@mail.com');

    $article = new Article(
        'Article 1',
        'Sous-titre',
        $user,
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, commodi. Mollitia officiis laboriosam quae ea, accusamus voluptas. Officiis accusamus officia error voluptates consequuntur excepturi voluptate doloremque, quisquam ipsum adipisci atque.'
    );
    
    $produit1 = new Produit('Produit 1', 'Description produit 1', rand(1, 100));
    $produit2 = new Produit('Produit 2', 'Description produit 2', rand(1, 100));
    $produit3 = new Produit('Produit 3', 'Description produit 3', rand(1, 100));

    $category = new Category('Categorie Produit', []);

    $category->addProduct($produit1);
    $category->addProduct($produit2);
    $category->addProduct($produit3);
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <h2>User</h2>
    <hr>
    <?= $user->getNom().' '.$user->getPrenom() ?>
    <hr>
    <h2>Article</h2>
    <hr>
    <?= $article->getTitre().' '.$article->getSousTitre().' '.$article->getUser()->getNom().'<br />'.$article->getContenu() ?>
    <hr>
    <h2>Category</h2>
    <hr>
    <?php
    echo $category->getNom().'<br />';

    foreach($category->getListeProduits() as $produit) {
        echo $produit->getLibelle().' - '.$produit->getPrix().'<br>'; 
    }
    
    echo 'Prix total : '.$category->getTotalProductPrice().'<br />';

    echo 'Produit le plus cher : '.$category->getExpensiveProduct()->getLibelle();
    ?>
    <hr> 
    
</body>
</html>