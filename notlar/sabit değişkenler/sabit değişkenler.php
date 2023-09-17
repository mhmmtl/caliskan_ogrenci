<?php

    /*
        Sabit Değişkenler;
            define() fonksiyonu ile tanımlanır
            Türkçe karakterler içerebilir
            Sayı ile başlayamaz
            Harf ya da _ işareti ile başlar
            Büyük-küçük harfe duyarlıdır
        Veri türlerinde;
            Object hariç tüm veri türlerini kapsar.
    */

    $muhammet = "muhammet ali";
    //echo $muhammet;

    define("muhammet", "muhammet ali");
    //define("muhammet", "muhammet ali");
    
    echo muhammet;

?>