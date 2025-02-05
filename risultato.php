<?php
    include("connessione.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $IDRecensione = $_POST["IDRecensione"];
        $azione = $_POST["azione"];

        if ($azione === "aggiornare") {
            $newVoto = $_POST["voto"];
            $sql = "UPDATE recensioni SET Voto = $newVoto WHERE IDRecensione = $IDRecensione";
                if ($conn->query($sql)) {
                    showData($IDRecensione, $azione, $newVoto, "Recensione  aggiornata correttamente");
                } else {
                    showDataError("Errore durante l'aggiornamento");
                }
        } else {
            $sql = "DELETE FROM recensioni WHERE IDRecensione = $IDRecensione";
                if ($conn->query($sql)) {
                    showData($IDRecensione, $azione, 0 , "Recensione eliminata correttamente");
                } else {
                    showDataError("Errore durante l'eliminazione");
                }
        } 

        function showDataError($f){
            echo "<div class='divShowData'>";
                echo "<h1 class='error'>$f</h1>";
                echo "<br>";
                echo "<br>";
                echo "<a class='sendButton' href='./scelta.html'>HOME</a>";
            echo "</div>";
        }
        
        function showData($ID, $a, $nv, $f){
            echo "<div class='divShowData'>";
                echo "<h1 class='correct'>" . strtoupper($f) . "</h1>";
                echo "<p><b>ID Recenzione:</b> $ID</p>";
                if ($nv > 0) {
                    echo "<p><b>Nuovo voto:</b> $nv</p>";
                }
                echo "<br>";
                echo "<br>";
                echo "<a class='sendButton' href='./scelta.html'>HOME</a>";
            echo "</div>";
        }
    ?>
</body>
</html>