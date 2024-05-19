<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Formulaire d'Inscription</title>
<link rel="stylesheet" href="inscription.css">
</head>
<body>
<div class="container" id ="singUp">
  <h2>Inscription</h2>
  <form action="login.php" method="post">
    <div class="input-group">
      <label for="nom">Nom:</label>
      <input type="text" id="firstName" name="firstName" placeholder="nom" >
    </div>
    <div class="input-group">
      <label for="prenom">Prénom:</label>
      <input type="text" id="lastName" name="prenom">
    </div>
    <div class="input-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name ="email" placeholder="email">
    </div>
    <div class="input-group">
    <label for="password">Mot de passe:</label><br>
    <input id="passwordInput" type="password" name="password" placeholder="password">
    </div>
    <button type="submit" class="btn" value="Sign Up" name="signUp"> sing UP</button>
  </form>
</div>
<script src="script.js"></script>
</body>
</html>
