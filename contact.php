<?php require('header/header.php');?>
<link rel="stylesheet" type="text/css" href="css/stylecontact.css">	
<main class="formu">
	<form action="" method="post" class="form">
		<fieldset>
			<legend>Formulaire de contact</legend>
		<div class="formall nom">
			<h2>Nom</h2>
			<input type="text" name="nom">
		</div>
		<div class="formall">
			<h2>Pr&#233;nom</h2>
			<input type="text" name="prenom">
		</div>
		<div class="formall">
			<h2>Email</h2>
			<input type="email" name="mail">
		</div>
		<div class="formall">
			<h2>T&#233;l&#233;phone</h2>
			<input type="tel" name="telephone">
		</div>
		
		<div class="formall">
			<h2>Sujet</h2>
			<select name="sujet">
				<optgroup label="-- Choisissez votre option --">
					<option>Salut</option>
					<option>Salut</option>
					<option>Salut</option>
				</optgroup>
			</select>
		</div>
		<div class="formall">
			<h2>Votre message</h2>
			<textarea rows="5"></textarea>
		</div>
		<div class="formall">
			<button type="submit" class="submit">Envoyer</button>
		</div>
	</fieldset>
	</form>
</main>
<?php require ("Footer/footer.php");?>