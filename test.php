<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recherche</title>
    <style>
        body {
            background-color: black;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        img {
            width: 300px;
        }

        div {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <img src="./img/logo.jpg">
    <?php include './config.php' ?>

    <?php
        if (isset($_POST['nom'])) {
            $search = $_POST['nom'];
            $query = "SELECT id, name, date, agent, sanction, raison, carte FROM casier WHERE name = '$search'";
            $result = $bdd->query($query);

            if ($result->rowCount() > 0) {
                echo "<div>" . "<h1>" . $_POST['nom'] . "</h1>" . "</div>";
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo "<div>".
                         "<p> Date de l'arrestation : " . $row['date'] . "</p>" .
                         "<p> Agent responsable de l'arrestation : " . $row['agent'] . "</p>" .
                         "<p> Sanction : " . $row['sanction'] . "</p>" .
                         "<p> Raison : " . $row['raison'] . "</p>" .
                         "<p> Lien vers la carte : " . $row['carte'] . "</p>" .
                         "</div>" .
                         "<hr style=\"border-color: white;\">";
                }
            } else {
                echo "<div>Aucun résultat trouvé.</div>";
            }
        }
    ?>

    <script type="text/javascript">

    </script>

</body>
</html>