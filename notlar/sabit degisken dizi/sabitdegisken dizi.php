<?php

define('UYE', [
    'ad' => 'muhammet ali',
    'soyad' => 'özbay',
    'meslek' => 'Gariban',
    'yas' => 20,
    'sporlar' => [
        'motor sürmek',
        'markete yürüme gitmek'
    ]
]);
//print_r(UYE);
echo UYE['sporlar'][1];