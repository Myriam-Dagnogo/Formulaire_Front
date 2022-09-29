<!DOCTYPE html>
<html>

<head>
	<title>Contact us</title>
    <link rel="stylesheet" href="{{asset('assets/src/css/style.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>

<body>
	<div class="container">
		<div class="contact-box">
			<div class="left">
				<img src="{{asset('assets/src/img/Group 2-2.png')}}" width="500px" height="510px" alt="" srcset="">
			</div>
			<div class="right">
				<h2 class="h2auth">Formulaire d'inscription</h2>
				<form action="{{route('val_devis')}}" method="POST" >
                    @csrf
					<input type="text" class="field" placeholder="Nom" name="nom" required>
					<input type="text" class="field" placeholder="Prénom" name="prenom" required>
					<input type="text" class="field" placeholder="Email" name="mail" required>
					<input type="integer" class="field" placeholder="Contact" name="tel" required>
					<input type="password" class="field" placeholder="Mot de passe" name="mdp" required>
					<button class="btn" name="val_devis">S'inscrire</button>
					<br>
					<br>

					<h4>Déjà inscrit? <a href="/Connexion">Connectez-vous</a></h4>
				</form>
			</div>
		</div>
	</div>
</body>

</html>