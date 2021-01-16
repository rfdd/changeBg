<?php 
    $fName = 'Имя: '.$_POST['name'].' <br />';
    $fPhone =  'Сообщение: '.$_POST['phone'].' <br />';
    $AllInOne =  $fName.$fPhone;
    $to = 'mail@rfdd.ru'; 
    $headers="From: Egor Rfd <mail@rfdd.ru>\nReply-to:mail@rfdd.ru\nContent-Type: text/html; charset=\"utf-8\"\n"; 
    mail($to, 'Свяжитесь с нами', $AllInOne, $headers); 

?>