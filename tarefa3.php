<?php
    if(isset($_GET["id"])){// verfica se esta recebendo o ID por parametro
        $id = $_GET["id"];
    }else{
        $id = null;
    }

    define( 'MYSQL_HOST', 'localhost' );
    define( 'MYSQL_USER', 'root' );
    define( 'MYSQL_PASSWORD', '' );
    define( 'MYSQL_DB_NAME', 'teste' );

    try{
        $conn = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD ); // faz conxão com banco de dados
    }
    catch ( PDOException $e ){
        echo 'Erro ao conectar no banco de dados: ' . $e->getMessage();
    }
    $sql = "SELECT * FROM usuarios WHERE id = ?"; 
    $sta = $conn->prepare($sql);
    $sta->bindParam(1, $id, PDO::PARAM_INT);
    $sta->execute();
    $result = $sta->fetchAll(\PDO::FETCH_ASSOC);

    var_dump($result);// Na tarefa não estava claro se deveria exibir o resultado.
    




// Não fechei a tag php propositalmente, por conta de ser uma boa prática de programação, e muitos frameworks fazem o mesmo. 