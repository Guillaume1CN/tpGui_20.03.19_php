<?php
require "../layout/header.php";

?>




      <?php

      //------------permet d'afficher touts les elément de la bdd
      $bdd = new PDO('mysql:host=localhost;dbname=tp_php_2', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      $reponse = $bdd->query('select * from users');
      while($donnees = $reponse->fetch())
      {
        if($donnees['active'] == 1)
        {
          echo $donnees[0] . ' | ';
          echo $donnees[1] . ' | ';
          echo $donnees[2] . ' | ';
          echo $donnees[3] . ' | ';
          echo $donnees[4] . "<br>";
        }

      }
      ?>


      <?php


        require "../layout/footer.php";
      ?>
