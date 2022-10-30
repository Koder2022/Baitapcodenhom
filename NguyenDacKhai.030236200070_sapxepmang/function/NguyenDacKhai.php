<!DOCTYPE html>
<html>
<body>
<?php
include 'myLibs.php';
    $arrCourse[101] = ['name' => 'Thiết kế web 1',
                            'credits' => 4,
                            'duration' => 60,
                            'instructors' => ['John','Lee']];
        $arrCourse[201] = ['name' => 'Thiết kế web 2',
                            'credits' => 4,
                            'duration' => 60,
                            'instructors' => ['John']];
        $arrCourse[301] = ['name' => 'Lập trình web 1',
                            'credits' => 3,
                            'duration' => 60,
                            'instructors' => ['John','Lee']];
        $arrCourse[401] = ['name' => 'Lập trình web 2',
                            'credits' => 2,
                            'duration' => 60,
                            'instructors' => ['John','Lee','Hai']];    
?>
<table border="1" >
        <thead>
            <tr>
                <th>Mã MH</th>
                <th>Tên MH</th>
                <th>Số tín chỉ</th>
                <th>Số tiết</th>
                <th>Giảng viên phụ trách</th>
            </tr>
        </thead>
    <tbody><Body></body>
            <?php
           
                foreach($arrCourse as $k => $v){?>
               <tr>
                  <td><?php echo $k?></td>
                  <td><?=$v['name']?></td>
                  <td><?=$v['credits']?></td>
                  <td><?=$v['duration']?></td>
                  <td>
                        <?php
                            
                            echo NoiChuoi($v['instructors'],",");
                        ?>
                                                     
                  </td>
               </tr>                    
            <?php } ?>          
         </tbody>
</table>
</body>
</html>
