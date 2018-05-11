<?php
$dbh = new PDO('mysql:host=localhost;dbname=booksgame', $root, $root);



 foreach($dbh->query('SELECT * from booksgame') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
