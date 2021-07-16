<?php
    class MyDate{
        
        public static function toAmerican($data){
            $data = str_replace("/","-",$data);
            $data = date('Y-m-d',  strtotime($data));
            return $data;
        }
    }

    echo MyDate::toAmerican("01/10/2021");

// Não fechei a tag php propositalmente, por conta de ser uma boa prática de programação, e muitos frameworks fazem o mesmo. 