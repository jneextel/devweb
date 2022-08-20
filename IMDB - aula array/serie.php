<?php include "header.php"; 
      include "dados.php";

      $id = $_GET["id"] ?? NULL;

      if (empty ($id)) {
        echo "<script>alert('Serie nao encontrada');history.back();</script>";
        exit;

    }
        $nome = $series[$id]["nome"];
        $imagem = $series[$id]["imagem"];
        $sinopse = $series[$id]["sinopse"];

?>

    <main>
        <div class="grid-2">
            <div class="coluna">
                <img src="imagens/<?=$imagem?>">
            </div>
            <div class="coluna">
                <h1><?=$nome?></h1>
                <h2><strong>Sinopse:</strong></h2>
                <p><?=$sinopse?></p>
            </div>
        </div>
    </main>