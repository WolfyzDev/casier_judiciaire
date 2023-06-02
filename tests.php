<?php include './config.php' ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Afficher l'image</title>
</head>
<body>
    <?php
    $id = 5; // ID de l'image à afficher

    $query = $bdd->prepare("SELECT carte FROM casier WHERE id = ?");
    $query->execute([$id]);

    if ($query->rowCount() > 0) {
        $row = $query->fetch(PDO::FETCH_ASSOC);
        $imageData = $row['carte'];
        $imageType = "image/png"; // Remplacez par le type de contenu approprié pour votre image

        // Affichage de l'image à partir des données binaires
        echo '<img src="data:'.$imageType.';base64,'.base64_encode($imageData).'" alt="Image">';
    } else {
        echo "Aucune image trouvée.";
    }

    $query->closeCursor();
    ?>

</body>
</html>