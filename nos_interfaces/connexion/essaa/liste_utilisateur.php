<?php 
session_start() ; 
require 'connexion_base_donnees.php'; 

$query = $db->prepare("SELECT * FROM equipe where username1 = :username1 or username2 = :username2");
$query->execute([

   "username1" => $_SESSION['user1'], 
   "username2" =>$_SESSION['user']
   
   ]); 
   
   $data = $query->fetchAll(); 
   
   ?> 
   
   <!DOCTYPE html> 
<html>
<head> 

<title > bienvenue </title> 

<link rel="stylesheet" href="style.css">

</head>
<body> 
<div id="container">

<h1> bienvenue <?php echo $_SESSION['']?></h1>
<h2> liste d'amis : </h2>

<?php 

for ($i=0; $i < sizeof($data); $i++) {

if($data[$i]['username1']==$_SESSION['user']){
	echo $data[$i]['username2'];
	if($data[$i]['is_pending']==true)
		echo "(en attendre detre accepter)";
	

}else{



}
}
?> 



<h2> demande d'amis :</h2> 
<h2> autre utilisateur :</h2>
</div> 
</body> 
</html> 
