<?php

    function test()
    {
        return "test";
    }

    $a = test();
   
    function topla($sayi1 = 2, $sayi2 = 10)
    {
        return ($sayi1 + $sayi2);
    }

    $toplam = topla();
   
    $ad = 'muhammet ali';

    function adsoyad($soyad)
    {
       
        global $ad;
        return $ad . ' ' . $soyad;
    }

    $yazi = "muhammet ali";

    function kisalt($str, $limit = 10)
    {
        $karakterSayisi = strlen($str);
        if ($karakterSayisi > $limit){
            $str = substr($str, 0, $limit) . '..';
        }
        return $str;
    }

    echo kisalt($yazi, 5);

?>