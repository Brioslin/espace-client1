<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Connexion au site de demande de certificat de nationalité</title>
  <link rel="stylesheet" href="css/style4.css" />
</head>

<body>
  <header>
    <div class="container">
      <div class="logo">
	  <img src="ressources/a.png" alt="Logo du ministère de l'Intérieur" style="width: 120px; height: 40px;"/>
      </div>
      <h1>Connexion</h1>
    </div>
  </header>

  <main>
    <div class="container">
      <form action="connexion.php" method="post">
      

		<div class="form-group">
		<label for="nom">Nom :</label>
    <input type="text" id="nom" placeholder="votre nom" required pattern="^[A-Za-z ]+" >
    <span class="error"></span>
        </div>

		<div class="form-group">
          <label for="email">Adresse email</label>
          <input type="email" name="email" placeholder="votre email" id="email" required />
        </div>
        <div class="form-group">
          <label for="password">Mot de passe</label>
          <input type="password" name="password" id="password" placeholder="votre mot de passe" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$" title="Le mot de passe doit contenir au moins 8 caractères, une minuscule, une majuscule et un chiffre."/>
        </div>
        <div class="form-group">
          <input type="submit" value="Se connecter" class="btn" />
        </div>
        
      </form>
    </div>
  </main>

  <footer>
    <div class="container">
      <div class="copyright">
        <p>© Ministère de l'Intérieur</p>
      </div>
      <div class="contact">
        <p>
          <a href="#">Nous contacter</a>
        </p>
      </div>
    </div>
  </footer>
</body>

</html>
