<?php
    if(isset($_GET["p"])){// verfica se esta recebendo o ID por parametro
        $p = $_GET["p"];
    }else{
        $p = 1;
    }

    define( 'MYSQL_HOST', 'localhost' );
    define( 'MYSQL_USER', 'root' );
    define( 'MYSQL_PASSWORD', '' );
    define( 'MYSQL_DB_NAME', 'teste' );
    $qtde_registros = 5;

    try{
        $conn = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD ); // faz conexão com banco de dados
    }
    catch ( PDOException $e ){
        echo 'Erro ao conectar no banco de dados: ' . $e->getMessage();
    }

    $reg_inicial = ($p-1) * $qtde_registros;

    $sql = "SELECT * FROM usuarios LIMIT ?,?"; 
    $sta = $conn->prepare($sql);
    $sta->bindParam(1, $reg_inicial, PDO::PARAM_INT);
    $sta->bindParam(2, $qtde_registros, PDO::PARAM_INT);
    $sta->execute();
    $result = $sta->fetchAll(\PDO::FETCH_ASSOC);

    var_dump($result);// Na tarefa não estava claro se deveria exibir o resultado.
    




// Não fechei a tag php propositalmente, por conta de ser uma boa prática de programação, e muitos frameworks fazem o mesmo. 