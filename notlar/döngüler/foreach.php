<?php



$sayilar = [1,2,3,4,5,6,7,8,9,10];

foreach($sayilar as $sayi){
    echo $sayi . '<br>';
}

$uyeDetay = [
    'ad' => 'muhammet ali',
    'soyad' => 'özbay',
    'yas' => 20
];

foreach($uyeDetay as $key => $val){
    echo $key . ':' . $val . '<br>';
}

?>