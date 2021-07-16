<?php
    $valores = array(1,3,5,9,12,10);
    $soma = 0;
    for($x=0;$x<count($valores);$x++){
        $soma += $valores[$x];
    }
    echo $soma;
// Não fechei a tag php propositalmente, por conta de ser uma boa prática de programação, e muitos frameworks fazem o mesmo. 