<?php
    class MyDate{
        
        // metodo para transformar formato de data de brasileiro para americano. 
        public static function toAmerican($data){
            $data = str_replace("/","-",$data);
            $data = date('Y-m-d',  strtotime($data));
            return $data;
        }

        // Metodo para transformar formato de data de americano para brasieliro.
        public static function toBrazilian($data){
            $data = date('d-m-Y',  strtotime($data));
            $data = str_replace("-","/",$data);
            return $data;
        }

        // Metodo para transformar formato de data de americano para brasileiro e vise versa. 
        public static function toggle($data){
            
            $padraoBR = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";
            if(preg_match($padraoBR,$data)===1){
                $data = MyDate::toAmerican($data);
                return $data;  
            }

            $padraoUSA = "/^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$/";
            if(preg_match($padraoUSA,$data)===1){
                $data = MyDate::toBrazilian($data);
                return $data;
            }

            return "Formato de data inválido";
            
        }
        
    }

    echo "2021-07-10 = ".MyDate::toggle("2021-07-10")."<br>";
    echo "10/07/2021 = ".MyDate::toggle("10/07/2021")."<br>";
    echo "10/07/21 = ".MyDate::toggle("10/07/21")."<br>";

// Não fechei a tag php propositalmente, por conta de ser uma boa prática de programação, e muitos frameworks fazem o mesmo. 