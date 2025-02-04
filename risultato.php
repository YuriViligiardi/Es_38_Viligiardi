<?php
    include("connessione.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato</title>
</head>
<body>
    <?php
        $IDRecenzione = $_POST["IDRecenzione"];
        $azione = $_POST["azione"];

        if ($azione === "aggiornare") {
            $newVoto = $_POST["voto"];
            $sql = "UPDATE recenzioni SET Voto = $newVoto WHERE IDRecenzione = $IDRecenzione";
        }

        
    ?>
</body>
</html>