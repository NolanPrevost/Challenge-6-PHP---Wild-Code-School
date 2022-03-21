<?php
echo "Merci " . $_POST["user_firstname"] . " " . $_POST["user_name"] . " de nous avoir contacté à propos de " . $_POST["subject"] . ". " . PHP_EOL;

echo "Un de nos conseiller vous contactera soit à l’adresse " . $_POST["user_email"] . " ou par téléphone au " . $_POST["user_phone_number"] . " dans les plus brefs délais pour traiter votre demande : " . PHP_EOL; 

echo $_POST["user_message"];
  ?>