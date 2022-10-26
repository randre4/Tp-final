<?php

//Connexion à notre db 
   $con=mysqli_connect('127.0.0.7','root','root','tp_final');

   //Gestion des erreurs en cas de problèmes
   if(!$con){
      die('erreur de connexion a la base de donnée');
   }else{
      }

   //PDO sert à se connecter à un serveur MySQL avec PHP
   $pdo= new PDO('mysql:dbname=tp_final;host=localhost','root','root');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>