<?php

    $ad = "muhammet ali";
    $soyad = "özbay";
    $meslek = "yavuzlar öğrenci";
    $yas = 20;

    /*
        Dizi Tanımlama
            1- array()
            2- []
    */

    $kimlik = array(
        'ad' => "muhammet ali",
        'soyad' => "özbay",
        'meslek' => "yavuzlar öğrenci",
        'yas' => 20
    );

    $kimlik2 = [
        'ad' => "muhammet ali",
        'soyad' => "özbay",
        'meslek' => "yavuzlar öğrenci",
        'yas' => 20
    ];

    $sayilar = array(1,2,3);
    $sayilar2 = [1,2,3];

    /*
        Dizi İçindeki Elemanlara Erişmek
            - print_r()
    */

    //echo $kimlik['meslek'];
    //print_r($kimlik2);

?>