<?php
require "../layout/header.php";
?>

<form id="contact" method="post" action="newletter.php">
  <fieldset><legend>Vos coordonnées</legend>
    <p><label for="email">votre email</label><input type="text" id="email" name="email" /></p>
 <button type="submit" class="btn btn-dark">Rechercher</button>
    </fieldset>

</form>


<?php



  if(!empty($_POST['email']))
  {
      $bdd = new PDO('mysql:host=localhost;dbname=tp_php_2', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      $requete = $bdd->prepare('INSERT INTO newsletter(email) VALUES(:email)');
      //realise la commande
      $requete->bindParam(':email', $_POST['email']);
      // ajoute l'email dans la bdd
      $requete->execute();
  }

 ?>


<?php
require "../layout/footer.php";
?>
