<meta charset="utf-8">
<?php
    $a = 5;
    $b = '05';
    var_dump($a == $b);         // Почему true? неявное приведение типа string в integer в переменной $b
    var_dump((int)'012345');     // Почему 12345? явное приведение типа string в integer
    var_dump((float)123.0 === (int)123.0); // Почему false? несоответсвие типов float и integer
    var_dump((int)0 === (int)'hello, world'); // Почему true? в данном случае результатом явного преобразования строки в целое число является 0  
?>