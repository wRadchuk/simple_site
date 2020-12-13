<?php
     // Ловим посетителей сайта...

     $name         = $_SERVER["HTTP_USER_AGENT"];
     $session_time = $_SERVER['REQUEST_TIME']   ; // Время визита
     $has_come     = $_SERVER['HTTP_REFERER']   ; // Посетитель пришел из...
     $ip           = $_SERVER['REMOTE_ADDR']    ; // IP адрес посетителя
     $page         = $_SERVER['REQUEST_URI']    ; // Что смотрел посетитель

    // echo "Посетитель: ".$name.'<br>';
    // echo "Время посищения: ".$session_time.'<br>';
    // echo "От куда пришел: ".$has_come.'<br>';
    // echo "IP посетителя: ".$ip.'<br>';
    // echo "Что он смотрел: ".$page.'<br>';

?>
