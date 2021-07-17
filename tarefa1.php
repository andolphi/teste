<?php
    $valores = array(1,3,5,9,12,10);
    $soma = 0;
    foreach ($valores as $valor){
        $soma += $valor;
    }
    echo $soma;


// Não fechei a tag php propositalmente, por conta de ser uma boa prática de programação, e muitos frameworks fazem o mesmo. 