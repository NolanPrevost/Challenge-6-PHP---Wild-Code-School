<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form  action="thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_lastname" required>
    </div>
    <div>
      <label  for="prenom">Prénom :</label>
      <input  type="text"  id="prenom"  name="user_firstname" required>
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email" required>
    </div>
    <div>
      <label  for="telephone">Numéro de téléphone :</label>
      <input  type="text"  id="telephone"  name="user_phone_number" required>
    </div>
    <div>
    <select id="subject" name="subject">
  <option value="pâtes">Les pâtes</option>
  <option value="gnocchi">Les gnocchi</option>
  <option value="pizza">La pizza</option>
  <option value="arancini">Les arancini</option>
</select>
</div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message" required></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
</body>
</html>