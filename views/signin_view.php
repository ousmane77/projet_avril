<!DOCTYPE html>
<html>
<head>
	<title>Nymeria Agency-signin</title>
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
				<div class="yForm">
					<h2>Inscription</h2>
					<form action="signin" method="POST" enctype="multipart/form-data">
						<div class="inputG">
							<label for="regName">Nom <span style="color:green">*</span></label>
							<input id="regName" name="regName" type="text">
						</div>
						<div class="inputG">
							<label for="regPren">Prenom <span style="color:green">*</span></label>
							<input id="regPren" name="regPren" type="text">
						</div>
						<div class="inputG">
							<label for="phone">Telephone <span style="color:green">*</span></label>
							<input id="phone" name="tel" type="tel">
						</div>
						
						<div class="inputG">
							<label for="regMail">Email <span style="color:green">*</span></label>
							<input id="regMail" name="regMail" type="email">
						</div>
						<div class="inputG">
							<label for="regPass">Mot de Passe <span style="color:green">*</span></label>
							<input id="regPass" name="regPass" type="password">
						</div>
						<div style="color: red; font-size: 70%"><?=$error; ?></div>
						<button type="submit" class="btn btn-primary">Soumettre</button>
					</form>
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
</html>
