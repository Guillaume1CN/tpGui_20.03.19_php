<?php
require "../layout/header.php";

?>



<form id="contact" method="post" action="inscription.php">
  <fieldset><legend>Vos coordonnées</legend>
    <p><label for="pseudo">votre pseudo</label><input type="text" id="pseudo" name="pseudo" /></p>
    <p><label for="password1">mdp</label><input type="text" id="password1" name="password1" /></p>
    <p><label for="password2">confirmer mdp</label><input type="text" id="password2" name="password2" /></p>
    <p><label for="email">votre email</label><input type="text" id="email" name="email" /></p>
 <button type="submit" class="btn btn-dark">Rechercher</button>
    </fieldset>
</form>


<?php



  if(!empty($_POST['pseudo']) && !empty($_POST['password1']) && !empty($_POST['password2']) && !empty($_POST['email'])  )
  {
      if($_POST['password1'] == $_POST['password2'])
      {
        $bdd = new PDO('mysql:host=localhost;dbname=tp_php_2', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $requete = $bdd->prepare('INSERT INTO newsletter(email) VALUES(:email)');

        //realise la commande
        $requete->bindParam(':email', $_POST['email']);
        // ajoute l'email dans la bdd
        $requete->execute();

        $requete = $bdd->prepare('INSERT INTO users(login, password, email, active, type) VALUES(:login, :password, :email, :active, :type)');
        $requete->bindParam(':login', $_POST['pseudo']);
        $requete->bindParam(':password', $_POST['password1']);
        $requete->bindParam(':email', $_POST['email']);
        $actif = 1;
        $type = "user";
        $requete->bindParam(':active', $actif);
        $requete->bindParam(':type', $type);
        // ajoute l'email dans la bdd
        $requete->execute();
      }
      else
      {
        echo "les 2 mdp entrer sont different";
      }
  }

 ?>


<?php
require "../layout/footer.php";
?>
