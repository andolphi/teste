<?php
    
    if(isset($_GET["data"])){// verifica se está recebendo a data por parametro.
        $data = $_GET["data"];
    }else{
        $data = null;
    }
    
    $data = str_replace("/","-",$data);
    $data =  date('Y-m-d',  strtotime($data));
    
    $diferenca = strtotime($data) - strtotime(date("Y-m-d"));
    
    $dias = floor($diferenca / (60 * 60 * 24)) * -1; // Estou levando em concideração que a data passada por parametro será sempre menos que a data atual, por isso estou multiplicando por -1. 

    echo $dias;
// Não fechei a tag php propositalmente, por conta de ser uma boa prática de programação, e muitos frameworks fazem o mesmo. 
