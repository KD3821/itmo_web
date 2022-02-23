<?php 

    $str1 = "Теперь пора всем хорошим людям прийти на помощь стране";
    $arr1 = explode(" ", $str1);
    $first = mb_strtoupper(mb_substr($arr1[1], 0, 1));
    $rest = mb_substr($arr1[1], 1, strlen($arr1[1]));

    echo $first.$rest." ";
    echo mb_strtolower($arr1[0], 'UTF-8')." ";
    echo $arr1[8]." ";
    echo $arr1[5]." ";
    echo $arr1[6]." ";
    echo $arr1[7]." ";
    echo $arr1[2]." ";
    echo $arr1[3]." ";
    echo $arr1[4]." ";
    
?>