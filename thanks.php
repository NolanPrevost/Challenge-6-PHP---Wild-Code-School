<?php

$message = "Attention, il faut bien remplir tous les champs !";

if (filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL)) {
  if ($_POST["user_firstname"] && $_POST["user_phone_number"] && $_POST["user_message"]) {
    echo "Merci " . $_POST["user_firstname"] . " " . " de nous avoir contacté à propos de " . $_POST["subject"] . ". " . "Un de nos conseiller vous contactera soit à l’adresse " . $_POST["user_email"] . " ou par téléphone au " . $_POST["user_phone_number"] . " dans les plus brefs délais pour traiter votre demande : " . $_POST["user_message"];
  } else {
    echo $message;
  }
} else {
  echo "Adresse mail non valide";
}
?>