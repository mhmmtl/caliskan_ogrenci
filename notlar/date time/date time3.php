<?php

date_default_timezone_set('Europe/Istanbul');
setlocale(LC_TIME, 'tr_TR');

echo strftime('%d %B %Y, %A - %T', strtotime('-2 day'));

?>