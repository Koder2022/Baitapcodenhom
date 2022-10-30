<?php
    include "myLibs.php";
    $arrCourse = array();
    $arrCourse['0'] = 'John';
    $arrCourse['1'] = 'Lee';
    $arrCourse['2'] = 'Hai';
        
    $str = NoiChuoi($arrCourse, ',');
    echo $str;
?>