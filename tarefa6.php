<?php
    class MyDate{
        
        public static function toAmerican($data){
            $data = str_replace("/","-",$data);
            $data = date('Y-m-d',  strtotime($data));
            return $data;
        }

        public static function toggle($data){
            
            $padraoBR = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";
            if(preg_match($padraoBR,$data)===1){
                $data = str_replace("/","-",$data);
                $data = date('Y-m-d',  strtotime($data));
                return $data;  
            }

            $padraoUSA = "/^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$/";
            if(preg_match($padraoUSA,$data)===1){
                $data = date('d-m-Y',  strtotime($data));
                $data = str_replace("-","/",$data);
                return $data;
            }

            return "Formato de data inválido";
            
        }
        
    }

    echo MyDate::toggle("2021-07-10")."<br>";
    echo MyDate::toggle("10/07/2021")."<br>";
    echo MyDate::toggle("10/07/21")."<br>";

// Não fechei a tag php propositalmente, por conta de ser uma boa prática de programação, e muitos frameworks fazem o mesmo. 