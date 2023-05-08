
<?php
    
        $cane =  new Categorie('cane', 'fa-solid fa-dog');
        $cane->setSize('piccola');
        $uccello = new Categorie('uccello', 'fa-solid fa-dove');
        $uccello->setSize('media');
        $gatto = new Categorie('gatto', 'fa-solid fa-cat');
        $gatto->setSize('grande');
        
    

   

    $prodotti = [
        new Cibo('https://shop-cdn-m.mediazs.com/bilder/royal/canin/mini/adult/umido/in/salsa/per/cani/6/400/rc_shn_wet_miniadult_mv_eretailkit_it_it_6.jpg', 'Royal Canin', 43.99, $cane , 1020, 'prosciutto, riso','piccola'),
        new Cibo('https://shop-cdn-m.mediazs.com/bilder/royal/canin/medium/adult/crocchette/per/cane/4/400/icon_topseller_1_2022_02_24t120615_324_4.jpg', 'Royal Canin', 43.99, $cane , 1020, 'prosciutto, riso','media'),
        new Cibo('https://shop-cdn-m.mediazs.com/bilder/royal/canin/maxi/adult/crocchette/per/cani/6/400/icon_topseller_1_2022_02_24t122255_148_6.jpg', 'Royal Canin', 35.99, $cane , 550, 'prosciutto, riso','grande'),


        new Cibo('https://shop-cdn-m.mediazs.com/bilder/verselelaga/prestige/premium/per/canarini/8/400/106041_pla_verselelaga_prestige__canaries_8.jpg', 'Prestige Premium', 28.99, $uccello, 600, 'riso, grano saraceno','piccola'),
        new Cibo('https://shop-cdn-m.mediazs.com/bilder/verselelaga/prestige/premium/per/pappagalli/3/400/122400_pla_versele_prestige_premium_papagei_10kg_3.jpg', 'Prestige Premium', 28.99, $uccello, 600, 'riso, grano saraceno','media'),
        new Cibo('https://shop-cdn-m.mediazs.com/bilder/verselelaga/prestige/loro/parque/per/pappagalli/africani/6/400/106097_pla_verselelaga_prestigeloro_parque_african_papageimix_hs_01_6.jpg', 'Prestige Premium', 28.99, $uccello, 600, 'riso, grano saraceno','grande'),


        new Cibo('https://shop.viridea.it/pub/media/catalog/product/cache/9d0195ded2b5561a452e190fb7f03a45/6/8/683053_felix-sensations-selezioni-in-gelatina-12-pezzi-cibo-per-gatti.jpg', 'Felix', 6.99, $gatto, 600, 'manzo, formaggio','piccola'),
        new Cibo('https://shop-cdn-m.mediazs.com/bilder/felix/crunchy/soft/con/carne/2/400/190441_pla_nestle_felix_crunchy_soft_fleisch_950g_hs_01_2.jpg', 'Felix', 17.99, $gatto, 950, 'manzo, cereali','media'),
        new Cibo('https://shop-cdn-m.mediazs.com/bilder/felix/le/ghiottonerie/in/gelatina/x/g/alimento/umido/per/gatti/5/400/pouches_88_1000x1000_1__5.jpg', 'Felix', 33.99, $gatto, 900, 'pollo, carne,pesce','grande'),

        
    ];

    try{
        echo $prodotti[0]->changePrice('ciao');
    } catch (Exception $e){
        echo 'Si è verificato un errore:' . ' '. $e->getMessage();
    }


     

    


?>