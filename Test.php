<?php
    //Bài 1 viết lại cấu trúc mảng
    function struct_array($n, $arr)
    {
        $m = count($arr)/$n;
        $a = array();
        for($i = 0; $i<$m; $i++)
        {
            for($j = 1; $j <=$n; $j++)
            {
                $a[] = $arr[$i + $j*$m - $m];
            }
        }

        return $a;
    }

    var_dump(struct_array(3 , [11, 2, 8, 10, 5, 99, 1, 8, 9]));


    echo 'jskasj';