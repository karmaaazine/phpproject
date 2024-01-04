<?php

function createDB(){
    try {
        //etablir la connexion
    $conn=new PDO("mysql:host=localhost; dbname=mydatabase","root","");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // requete SQL creer la base table comment
    $req="CREATE TABLE Comments(
        Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        post_id INT(6) UNSIGNED NOT NULL,
        firstname VARCHAR(30) NOT NULL,
        comment text NOT NULL,
        comment_date  TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        CONSTRAINT FK_postComment FOREIGN KEY (post_id) REFERENCES myguests(ID))";
        $conn->exec( $req );
        echo "Table Comments created successfully";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null ;
}
function SaveInComment(){
//  Premiere Methode : Insérer 6 lignes dans la table PRODUIT
try {
$servername="localhost";
$username= "root";
$password= "";
$dbname= "mydatabase";
$conn=new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// prepare sql and bind parameters
$stmt=$conn->prepare("INSERT INTO Comments(post_id, firstname, comment) VALUES (:post_id, :firstname, :comment)");
$stmt->bindParam(":post_id", $post_id);
$stmt->bindParam(":firstname", $firstname);
$stmt->bindParam(":comment", $comment);
//iNSERT into a Row
$post_id=1;
$firstname="john";
$comment ="c'est fantastique";
$stmt->execute();
echo "L'enregistrement à été effectuée qvec succes";
} catch (PDOException $e) {
    echo "Error". $e->getMessage() ."<br>";
}
$conn=null;
}

function getPosts() {
	// We connect to the database.
	try
    {
 $bdd = new PDO('mysql:host=localhost;dbname=mydatabase;charset=utf8', 'root', '');  }
    catch(Exception $e){
          die( 'Erreur : '.$e->getMessage()   );
         }

	// On récupère les 5 derniers visite
    $statement = $bdd->query('SELECT id, firstname, lastname, DATE_FORMAT(reg_date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_visite_fr FROM myguests ORDER BY reg_date DESC LIMIT 0, 5');

	$posts = [];
	while (($row = $statement->fetch())) {
    	$post = [
        	'firstname' => $row['firstname'],
            'lastname' => $row['lastname'],
        	'french_visite_date' => $row['date_visite_fr'],
            'identifier' => $row['id'],
        	
    	];

    	$posts[] = $post;
	}

	return $posts;
}

function getPost($identifier) {
	// We connect to the database.
	try
    {
 $bdd = new PDO('mysql:host=localhost;dbname=mydatabase;charset=utf8', 'root', '');  }
    catch(Exception $e){
          die( 'Erreur : '.$e->getMessage()   );
         }

	 // On récupère les 5 derniers visite
     $statement = $bdd->query('SELECT id, firstname, lastname, DATE_FORMAT(reg_date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_visite_fr FROM myguests WHERE id=:id');
         $statement->bindParam(':id',$identifier);
     $statement->execute();

     $row = $statement->fetch();
    	$post = [
            
        	'firstname' => $row['firstname'],
            'lastname' => $row['lastname'],
        	'french_visite_date' => $row['date_visite_fr'],
            'identifier' => $row['id'],
            
    	];
	return $post;
}

function getComments($identifier) {
	// We connect to the database.
	try
    {
 $bdd = new PDO('mysql:host=localhost;dbname=mydatabase;charset=utf8', 'root', '');  }
    catch(Exception $e){
          die( 'Erreur : '.$e->getMessage() );
         }
try{
	 // On récupère les 5 derniers visite
     $statement = $bdd->query('SELECT post_id,firstname,comment, comment_date  FROM Comments WHERE post_id= '.$identifier.'');
     $statement->execute();

	$comments = [];
	while (($row = $statement->fetch())) {
    	$comment = [
        	'firstname' => $row['firstname'],
        	'french_visite_date' => $row['comment_date'],
            'comment' => $row['comment'],	
    	];

    	$comments[] = $comment;
	}

	return $comments;
}catch (PDOException $e) {
    echo "Error <br>". $e->getMessage();
}
$conn = null;
}
?>