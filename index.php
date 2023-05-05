<?php 

    require_once __DIR__ . '/Models/accessori.php';
    require_once __DIR__ . '/Models/prodotto.php';
    require_once __DIR__ . '/Models/category.php';
    require_once __DIR__ . '/Models/cibo.php';
    require_once __DIR__ . '/Models/giocattoli.php';


    $category = [
        'cane' => new Categorie('cane', 'fa-solid fa-dog'),
        'gatto' => new Categorie('gatto', 'fa-solid fa-cat')
    ];

    var_dump( $category );

    $prodotti = [
        new Cibo('https://cdn.royalcanin-weshare-online.io/v2k6a2QBG95Xk-RBN9oV/v196/packshot-mini-ad-shn17', 'Royal Canin', 43.99, $category['cane'], 545, 'prosciutto, riso'),

        new Cibo('https://shop-cdn-m.mediazs.com/bilder/almo/nature/holistic/medium/adult/con/manzo/fresco/5/800/68015_pla_almo_nature_holistic_adult_rind_reis_medium_746_12kg_dog_5.jpg', 'Almo Nature', 44.99, $category['cane'], 600, 'manzo, cereali'),

        new Accessori('https://tiragraffi-rufi.it/1933-large_default/tiragraffi-per-gatti-ex-15.jpg', 'Tiragraffi', 79.80, $category['gatto'], 'sisal', 'M: 60L x 40l x 112H cm'),

        new Giocattoli('https://i.ebayimg.com/images/g/03kAAOSwA4BbK4Gm/s-l500.jpg', 'Topini di Peluche Trixie', 4.99, $category['gatto'], 'Morbido e salutare', '8.5 cm x 10 cm')
    ];

     var_dump( $prodotti );

?>