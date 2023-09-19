<?php

$time = time() - ((60 * 60 * 24) * 35);

$tarih = getdate($time);

print_r($tarih);
