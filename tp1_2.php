<?php

$servername = "localhost";
$username="root";
$password = ""; 
$dbname = "tp1";


$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}


$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Base de données créée avec succès ou déjà existante.<br>";
} else {
    echo "Erreur lors de la création de la base de données : " . $conn->error;
}

$conn->select_db($dbname);


$sql = "CREATE TABLE IF NOT EXISTS PRODUIT (
    Id INT(6) PRIMARY KEY,
    PNOM VARCHAR(50),
    COULEUR VARCHAR(50),
    POIDS VARCHAR(20),
    PRIX INT(5)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table PRODUIT créée avec succès ou déjà existante.<br><br>";
} else {
    echo "Erreur lors de la création de la table PRODUIT : " . $conn->error ."<br>";
}

$sql = "INSERT INTO PRODUIT (Id, PNOM, COULEUR, POIDS, PRIX)
VALUES
    (1, 'Produit 1', 'Rouge', '2 Kg', 500),
    (2, 'Produit 2', 'Bleu', '4 Kg', 400),
    (3, 'Produit 3', 'Vert', '6 Kg', 200),
    (4, 'Produit 4', 'Jaune', '3 Kg', 350),
    (5, 'Produit 5', 'Noir', '1 Kg', 600),
    (6, 'Produit 6', 'Blanc', '5 Kg', 250)";

if ($conn->query($sql) === TRUE) {
    echo "Lignes insérées avec succès dans la table PRODUIT.<br><br>";
} else {
    echo "Erreur lors de l'insertion des lignes dans la table PRODUIT : " . $conn->error."<br><br>";
}


$sql = "SELECT * FROM PRODUIT";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Contenu de la table PRODUIT :<br>";
    while ($row = $result->fetch_assoc()) {
        echo "Id: " . $row["Id"] . " - Nom: " . $row["PNOM"] . " - Couleur: " . $row["COULEUR"] . " - Poids: " . $row["POIDS"] . " - Prix: " . $row["PRIX"] . "<br>";
    }
} else {
    echo "La table PRODUIT est vide.<br>";
}

$sql = "SELECT * FROM PRODUIT WHERE PRIX > 300 ORDER BY PRIX";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Produits dont le prix est supérieur à 300 :<br>";
    while ($row = $result->fetch_assoc()) {
        echo "Nom: " . $row["PNOM"] . " - Prix: " . $row["PRIX"] . "<br>";
    }
} else {
    echo "Aucun produit trouvé avec un prix supérieur à 300.<br>";
}


$sql = "SELECT PNOM, COULEUR FROM PRODUIT WHERE POIDS < '5 Kg' ORDER BY PRIX";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Produits dont le poids est inférieur à 5 Kg :<br>";
    while ($row = $result->fetch_assoc()) {
        echo "Nom: " . $row["PNOM"] . " - Couleur: " . $row["COULEUR"] . "<br>";
    }
} else {
    echo "Aucun produit trouvé avec un poids inférieur à 5 Kg.<br>";
}


$sql = "UPDATE PRODUIT SET PRIX = 450 WHERE Id = 3";
if ($conn->query($sql) === TRUE) {
    echo "Prix du produit avec l'Id 3 modifié avec succès.<br>";
} else {
    echo "Erreur lors de la modification du prix du produit : " . $conn->error;
}


$sql = "DELETE FROM PRODUIT ORDER BY Id DESC LIMIT 1";
if ($conn->query($sql) === TRUE) {
    echo "Dernier produit supprimé avec succès de la table PRODUIT.<br>";
} else {
    echo "Erreur lors de la suppression du dernier produit : " . $conn->error;
}

$sql = "DROP TABLE IF EXISTS PRODUIT";
if ($conn->query($sql) === TRUE) {
    echo "Table PRODUIT supprimée avec succès.<br>";
} else {
    echo "Erreur lors de la suppression de la table PRODUIT : " . $conn->error;
}

$conn->close();
?>




</body>
</html>