<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
    <link rel="stylesheet" href="{{asset('assets/src/css/style.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
   
</head>
<style>
    body{
height: 100vh;
width: auto;
}
</style>
<body>
  
	<div class="container">
		<div class="contact-box">
			<div class="left"><img src="{{asset('assets/src/img/Group 1-2.png')}}" width="500px" height="510px"alt="" srcset=""></div>
			<div class="right">
				<h2>Formulaire de connexion</h2>
				<form action="/Accueil" method="post">
				<input type="mail" class="field" placeholder="Email" required>
				<input type="password" class="field" placeholder="Mot de passe" required>
				
				<button class="btn">Se connecter</button>
                <br>
                <br>
				<h4>Pas encore inscrit? <a href="/Inscription">Inscrivez-vous!</a></h4>
                </form>
			</div>
		</div>
	</div>
</body>
</html>