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

    //var_dump( $category );

    $prodotti = [
        new Cibo('https://cdn.royalcanin-weshare-online.io/v2k6a2QBG95Xk-RBN9oV/v196/packshot-mini-ad-shn17', 'Royal Canin', 43.99, $category['cane'], 545, 'prosciutto, riso'),

        new Cibo('https://shop-cdn-m.mediazs.com/bilder/almo/nature/holistic/medium/adult/con/manzo/fresco/5/800/68015_pla_almo_nature_holistic_adult_rind_reis_medium_746_12kg_dog_5.jpg', 'Almo Nature', 44.99, $category['cane'], 600, 'manzo, cereali'),

        new Accessori('https://tiragraffi-rufi.it/1933-large_default/tiragraffi-per-gatti-ex-15.jpg', 'Tiragraffi', 79.80, $category['gatto'], 'sisal', 'M: 60L x 40l x 112H cm'),

        new Giocattoli('https://i.ebayimg.com/images/g/03kAAOSwA4BbK4Gm/s-l500.jpg', 'Topini di Peluche Trixie', 4.99, $category['gatto'], 'Morbido e salutare', '8.5 cm x 10 cm')
    ];

     //var_dump( $prodotti );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- BOOSTRAP CSS LINK-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- FONTAWESOME LINK-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- CSS LINK-->
    <link rel="stylesheet" href="/style.css" />

    <title>E-commerce per animali</title>
</head>
<body>

    <div class="container">

        <h1 class="text-center py-3">Animal shop</h1>
        <h2 class="py-3">I nostri prodotti</h2>
        <div class="row">
            <?php
            // Ciclo per scorrere l'array dei prodotti
            foreach ($prodotti as $element) {
                // Prodotto che appartiene alla categoria 'cane'
                if ($element->category->nome == 'cane') {
            ?>
            <div class="col-3 mt-3">
                <div class="card">
                    <img  style="height: 304px;" src="<?php echo $element->immagine ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase">
                            <?php echo $element->nome ?>
                        </h4>
                        <h6 class="card-title ">
                            <?php echo $element->category->nome ?>
                            <i class="<?php echo $element->category->icona ?>"></i>
                        </h6>
                        <h5 class="card-title opacity-75">
                            <?php echo $element->prezzo ?> €
                        </h5>
                        <p class="card-text opacity-75">
                            peso netto:
                            <?php echo $element->pesonetto ?> g
                        </p>
                        <p class="card-text opacity-75">
                            ingredienti:
                            <?php echo $element->ingredienti ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>
            

           
            
        </div>

    </div>




















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
</body>
</html>