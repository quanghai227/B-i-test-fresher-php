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


    //Bài 2 tổng 2 số lớn nhất
    function sum_two_largest_number($arr)
    {
        $mang = $arr;
        $max =0; $beformax = 0;
        if($mang[0] > $mang[1])
        {
            $max = $mang[0];
            $beformax = $mang[1];
        }
        else{
            $max = $mang[1];
            $beformax = $mang[0];
        }

        for ($i = 2; $i <count($mang); $i++) {
            if($mang[$i] > $max)
            {
                $beformax = $max;
                $max = $mang[$i];
            }
            else if($mang[$i] >$beformax)
            {
                $beformax = $mang[$i];
            }
        }

        return $max + $beformax;

    }

    echo "<br/>";
    echo sum_two_largest_number([0, 100, -4, 8, 143, 5, 99, 100]);

    //Bài 3 khoảng cách nhỏ nhất
    function minimum_between_two_numbers($arr)
    {
        $min = 0;
        if($arr[0] > $arr[1])
        {
            $min = $arr[0] - $arr[1];
        } else{
            $min = $arr[1] - $arr[0];
        }

        for ($i = 0; $i <count($arr) -1; $i++) {
            for ($j = 1; $j < count($arr); $j++)
            {
                if (($arr[$i] > $arr[$j]) && (($arr[$i] - $arr[$j]) < $min) )
                {
                    $min = $arr[$i] - $arr[$j];
                }
                else if (($arr[$i] < $arr[$j]) && (($arr[$j] - $arr[$i]) < $min) ) {
                    $min = $arr[$j] - $arr[$i];
                }
            }
        }

        $new_array = array();
        for ($i = 0; $i <count($arr) -1; $i++) {
            for ($j = 1; $j < count($arr); $j++)
            {
                if (($arr[$i] > $arr[$j]) && (($arr[$i] - $arr[$j]) == $min) )
                {
                    array_push($new_array, [$arr[$j], $arr[$i]]);
                }
                else if (($arr[$i] < $arr[$j]) && (($arr[$j] - $arr[$i]) == $min) ) {
                    array_push($new_array, [$arr[$i], $arr[$j]]);
                }
            }
        }

        return $new_array;

    }

    echo "<br/>";
    print_r(minimum_between_two_numbers([1, 5, 4, 7, 9, 0, -10, 13, 93, 14, 15])) ;