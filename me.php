<?php include './config.php' ?>

<?php
	if (isset($_POST['name']) && isset($_POST['date']) && isset($_POST['agent']) && isset($_POST['sanction']) && isset($_POST['raison']) && isset($_POST['carte'])) {
		$nom = $_POST['name'];
		$date = $_POST['date'];
		$agent = $_POST['agent'];
		$sanction = $_POST['sanction'];
		$raison = $_POST['raison'];
		$carte = $_POST['carte'];

		$query = "INSERT INTO casier (`name`, `date`, `agent`, `sanction`, `raison`, `carte`) VALUES ('$nom', '$date', '$agent', '$sanction', '$raison', '$carte')";
		$result = $bdd->query($query);

		// Vérifiez si l'insertion a réussi
		if ($result) {
			header('Location: index.html');
			exit;

		} else {
			echo "Erreur lors de l'enregistrement.";
		}
	}
?>
