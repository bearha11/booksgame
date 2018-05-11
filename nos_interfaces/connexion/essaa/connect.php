<?php 
session_start(); 

$nom_util = $_POST['nom_util'];
$password = $_POST['password'];
//parametre de connexion
$host_name = "localhost";
$database = "booksgame";
$user_name = "root";
$password = "root";
//connexion
$conn = mysqli_connect("$host_name", "$user_name", "$password", "$database");


if (isset($_POST['submit'])) {
 
    if (!empty($_POST['nom_util']) && !empty($_POST['password'])) {
        $nom_util = mysqli_real_escape_string($conn, $_POST['nom_util']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);


$check = mysqli_query( $conn, "SELECT * FROM utilisateur WHERE  nom_util = '$nom_util' and password= '$password'");

        $nb_rows = mysqli_num_rows($check);
        if ($nb_rows >0) {
			session_start() ;
            $_SESSION['nom_util'] = $nom_util;
			
				header("location:liste_utilisateur.php") ;
        } else {
            echo "mot de passe ou nom d'utilisateur inccorecte ! ";
        }
    } else {
        echo 'Veuillez remplir tous les champs';
    }
}

?>