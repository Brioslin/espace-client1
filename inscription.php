
<?php
include '../config.php';

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['veri_pass']) && isset($_POST['contact'])) {
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$email=$_POST['email'];
  $pass=$_POST['pass'];
  $veri_pass=$_POST['veri_pass'];
  $contact=$_POST['contact'];
	if (!empty($nom) && !empty($prenom)  && !empty($email) && $pass!=null && $veri_pass!=null && !empty($contact)) {
		/*$con=mysqli_connect("localhost","root","","certificat_db");
		mysqli_select_db($con,'certificat_db');*/
		$req="INSERT INTO citoyen(nom,prenom,email,pass,veri_pass,contact) values('$nom','$prenom','$email','$pass','$veri_pass','$contact')";
		$res=mysqli_query($con, $req);
		if ($res==1) {
			echo "ok";
		}else { 
			echo "ne marche pas";
	}

}
}
?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2.css">
    <title>Document</title>
</head>
<body>
<STRONG>
    <H2><STRONg><MARquee>CERTIFICAT DE NATIONALITE </MARquee></STRONg></H2>
    
<img src="ressources/images.jpg" class="rounded float-start" alt="..."style="width: 150px; height: 120px;">
<img src="ressources/a.png" class="rounded float-end" alt=""style="width: 150px; height: 100px;"><br><br><br><br>
<H1 style=" text-align: center ";> <i> FORMULAIRE D'INSCRIPTION </i></H1>


    <!-- Contenu du formulaire -->
 <div class="">
   <form method="post" action="">
   
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" placeholder="votre nom" required pattern="^[A-Za-z ]+" >
    <span class="error"></span>


    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" placeholder="votre prenom" required pattern="^[A-Za-z ]+" >
    <span class="error"></span>


    <label for="email">Email :</label>
    <input type="email" name="email" id="email" placeholder=" votre Email" required>


    <label for="password">Mot de passe</label>
    <input type="password" name="pass" id="password"  placeholder="entrez un mot de passe " required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$" title="Le mot de passe doit contenir au moins 8 caractères, une minuscule, une majuscule et un chiffre.">



    <label for="password_confirm">Confirmation du mot de passe</label>
    <input type="password" name="veri_pass" id="password_confirm"  placeholder=" confirmez le mot de passe  " required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$" title="Le mot de passe doit contenir au moins 8 caractères, une minuscule, une majuscule et un chiffre.">
  

    <label for="contact">Contact :</label>
    <input type="text" name="contact" id="contact" placeholder="votre numero de telephone" required maxlength="9" pattern="[0-9]{9}">



<div style="text-align: center;">
    <button type="submit">Envoyer</button>
</div>
   </form>
 </div>

</body>
<script type="text/javascript">
  /*
    function valider(){
        var a=document.getElementById("nom").values;
        var b=document.getElementById('prenom').values;
        var c=document.getElementById('email').values;
        var d=document.getElementById('num_tel').values;
        var ab=/[a-z A-Z]/;
        if (a.test(ab)&& b.test(ab)){
            alert('bon');
        }else{
            alert('recommencer')
        }
var s=/[@.a-z A-Z]/;
if (c.test(s)){
            alert('bon');
        }else{
            alert('recommencer')
        }
    if(isNaN(d)&& d.length==9){
        alert("valider")
    }else{
        alert('recommencer')
    }
}
*/
const form = document.querySelector('form');

form.addEventListener('submit', (e) => {
  e.preventDefault();

  const inputs = form.querySelectorAll('input[required]');
  let isValid = true;

  for (let i = 0; i < inputs.length; i++) {
    const input = inputs[i];

    if (!input.validity.valid) {
      isValid = false;
      const span = input.nextElementSibling;
      span.textContent = input.validationMessage;
    }
  }

  if (isValid) {
    form.submit();
  }
});





</script>


</html>