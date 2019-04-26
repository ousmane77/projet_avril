<!DOCTYPE html>
<html>
<head>
	<title>Nymeria Agency-login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet"  href="assets/css/fontawesome/css/all.css">
	<link rel="stylesheet"  href="assets/css/main.css">
</head>
<body>
<div class="container-fluid un">
	
		<div class="valid">
			<h1 class="title">NYMERIA<span class="red">.com</span></h1>
			<div class="ins">
				
				<div class="blur"></div>
				<div class="container">
					<div class="sec1">
						<div class="log yForm">
							<h2>Connectez-vous</h2>
							<form method="POST">
								<div class="inputG">
									<label for="logMail">Adresse Email <span style="color:green">*</span></label>
									<input id="logMail" name="logMail" type="text">
								</div>
								<div class="inputG">
									<label for="logPass">Mot de Passe <span style="color:green">*</span></label>
									<input id="logPass" name="logPass" type="password">
								</div>
								<div style="color: red; font-size: 70%"><?=$error; ?></div>
								<button class="btn btn-primary" type="submit">valider</button>
							</form>
							<div class="toReg">
								<h2>Pas de compte ?</h2>
								<button class="btn btn-primary" onclick="document.location.href = 'signin' ">Incrivez-vous</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class=" img">
			<img src="assets/css/back-bg.jpg">
		</div>	
</div>
	
</body>