
<?php
function NoiChuoi($arr,$delimiter){
                            $str = "";                          
                            for($i = 0; $i<count($arr)-1; $i++)
                                $str .= $arr[$i]."$delimiter"; 
                            $str .= $arr[$i];                          
                            return $str;
             }
             ?>