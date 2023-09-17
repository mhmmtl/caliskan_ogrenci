<?php

    /*
        Veri Türleri (Data Types)
            String "muhammet ali" 'özbay'
            Integer 500, 200
            Float (Double) 5.5, 7.2
            Boolean (true, false)
            Array (dizi)
            Object (Nesne)
            NULL
        gettype()
    */

    $string = "muhammet ali özbay";
    $int = 500;
    $float = 5.5;
    $bool = false;
    $array = array();
    $object = new stdClass;
    $null = NULL;
    echo gettype($null);

?>