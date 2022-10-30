
<?php
include "NguyenDacKhai.php";
function Sapxepmang($arrCourse){
                            //$str = "";                          
                            for($i = 0; $i<count($arrCourse)-1; $i++){
                            $min = $i;
                            for ($j = $i + 1; $j < count($arrCourse)-1; $j++){
                                if ($arrCourse[$j] < $arrCourse[min]){
                                    $min = $j;
                                }
                            }                            
                            $temp = $arrCourse[$i];
                            $arrCourse[$i] = $arrCourse[$min];
                            $arrCourse[$min] = $temp;
                        }                          
                            return $arrCourse;                       
                    }
             ?>