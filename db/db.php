<?php

$categories = [
  'gatto' => new Category('Gatto', '<i class="fa-solid fa-cat"></i>'),
  'cane' => new Category('Cane', '<i class="fa-solid fa-dog"></i>'),
  'pesce' => new Category('Pesce', '<i class="fa-solid fa-fish"></i>'),
  'uccello' => new Category('Uccello', '<i class="fa-solid fa-dove"></i>'),
];

$products = [
  new Food('Royal Canin',43.99,'https://shop-cdn-m.mediazs.com/bilder/prezzo/speciale/royal/canin/puppy/royal/canin/adult/9/140/1_icon_percent_template_1000x1000_int_4_20__9.jpg',$categories['cane'],true,20,545,['prosciutto','riso']),
  new Food('Almo Nature',44.99,'https://shop-cdn-m.mediazs.com/bilder/almo/nature/holistic/medium/adult/con/pollo/fresco/1/140/26708_pla_almo_nature_holistic_adult_huhn_reis_medium_744_12kg_dog_1.jpg',$categories['cane'],false,0,600,['manzo','cereali']),
  new Food('Versele-Laga Prestige',42.99,'https://shop-cdn-m.mediazs.com/bilder/kg/kg/gratis/kg/verselelaga/prestige/5/140/icon_33percent_off_1000x1000_it_4__5.jpg',$categories['uccello'],true,2,400,['cereali','semi']),
  new Food('Almo Nature',34.99,'https://shop-cdn-m.mediazs.com/bilder/gratis/x/g/almo/nature/hfc/umido/per/gatti/5/140/icons_saverpacks_pyramids_0x00g_template_1000x1000_int_2022_03_21t090118_674_5.jpg',$categories['gatto'],true,2,400,['tonno','pollo','prosiutto']),
  new Accessory('Voliera Ferplast Bella Casa',184.99,'https://shop-cdn-m.mediazs.com/bilder/voliera/ferplast/bella/casa/2/140/71860_pla_vogelvoliere_bellacasa_back_2.jpg',$categories['uccello'],true,3,'Legno','M: L 83 x P 67 x H 153 cm'),
  new Accessory('Fluval inserto filtrante',2.29,'https://shop-cdn-m.mediazs.com/bilder/fluval/inserto/filtrante/in/materiale/espanso/5/140/77514_pla_fluval_schaumstoff_filtereinsatz_5.jpg',$categories['pesce'],true,30,'Materiale espanso', 'ND'),
  new Toy('Kong',13.49,'https://shop-cdn-m.mediazs.com/bilder/kong/aqua/3/140/74240_pla_kong_aqua_3.jpg',$categories['cane'],true,23,'Galleggia e rimbalza','8,5 cm x 10 cm'),
  new Toy('Topini di peluche Trixie',4.99,'https://shop-cdn-m.mediazs.com/bilder/topini/di/peluche/trixie/7/140/42535_pla_trixie_plueschmaus_grau_und_weiss_ret_01_7.jpg',$categories['gatto'],true,12,'Morbido con codina in corda','8,5 cm x 10 cm')
];

foreach ($products as $product) {
    $product->setDiscount(20);
}

//$products[0]->setDiscount(110);

try{
  $products[0]->setDiscount(110);
} catch(Exception $e){
  echo $e->getMessage();
}


$users = [
    new User('Giuseppe', 'Verdi', 70),
    new User('Mario', 'Rossi', 50),
    new User('Lucia', 'Bianchi', 30)
];

// aggiungo le proprietà del trait
$users[0]->street = 'Via dei Platani';
$users[0]->street_number = '1';
$users[0]->city = 'Milano';
$users[0]->zip = '20100';
$users[0]->country = 'Italia';

// leggo il metodo del trait
//var_dump($users[0]->getFullAddress());

$orders = [
  new Order($users[0],[$products[0],$products[3]], date('d/m/Y')),
  new Order($users[2],[$products[1],$products[3],$products[5]], date('d/m/Y'))
];

//var_dump($orders[0]);
$orders[0]->addProduct($products[6]);
//var_dump($orders[0]->getAmountFormatted());
//var_dump($orders[0]->getFinalAmountFormatted());
$orders[1]->removeProduct($products[3]);
//var_dump($orders[1]);
//var_dump($orders[1]->getAmountFormatted());