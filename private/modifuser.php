<?php
require "../layout/header.php";
?>

<form id="contact" method="post" action="modifuser.php">
  <fieldset><legend>Vos modification</legend>
    <p><label for="id">id a modifier</label><input type="id" id="id" name="id" /></p>
    <p><label for="pseudo">pseudo</label><input type="text" id="pseudo" name="pseudo" /></p>
    <p><label for="password1">mdp</label><input type="text" id="password1" name="password1" /></p>
    <p><label for="password2">confirmer mdp</label><input type="text" id="password2" name="password2" /></p>
    <p><label for="email">votre email</label><input type="text" id="email" name="email" /></p>
    <p><label for="type">type</label><input type="text" id="type" name="type" /></p>
 <button type="submit" class="btn btn-dark">Rechercher</button>
    </fieldset>
</form>
<?php

//-------------ne marche pas mais je souhaite refaire une inscription pour modifier le users. par defaut il reste un user
if(!empty($_POST['id']) && !empty($_POST['pseudo']) && !empty($_POST['password1']) && !empty($_POST['password2']) && !empty($_POST['email'])  )
{
    if($_POST['password1'] == $_POST['password2'])
    {
      $bdd = new PDO('mysql:host=localhost;dbname=tp_php_2', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      $requete = $bdd->prepare('UPDATE users set login = :login, password = :password, email = :email , activie = :active, type = :type WHERE id = $_POST[id] ');

      $requete->bindParam(':login', $_POST['pseudo']);
      $requete->bindParam(':password', $_POST['password1']);
      $requete->bindParam(':email', $_POST['email']);
      $actif = 1;
      $type = "user";
      if($_POST['type'] == 'admin')
      {
          $type = $_POST['type'];
      }
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


require "../layout/footer.php";
?>
