<?php require('header/header.php');?>
<link rel="stylesheet" type="text/css" href="css/stylecontact.css">
<main class="principal">
	<form action="bdd/contactreq.php" method="post" class="form" name="formcontact">
		<fieldset>
			<legend>Formulaire de contact</legend>
			<div class="formall">
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
					<option value="" selected>-- Choisissez votre option --</option>
					<optgroup label="Questions :" >
						<option value="Probleme avec le site">Probl&#232;me avec le site</option>
						<option value="Inscription">Inscription</option>
					</optgroup>
				</select>
			</div>
			<div class="formall">
				<h2>Votre message</h2>
				<textarea rows="5" name="message"></textarea>
			</div>
			<div class="formall">
				<button type="submit" class="submit">Envoyer</button>
			</div>
		</fieldset>
	</form>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>

	<script>
    $(function() {
      $("form[name='formcontact']").validate({
        // Define validation rules
        rules: {
          nom: "required",
          prenom: "required",
          mail: "required",
          telephone: "required",
          sujet: "required",
          message: "required",
          nom: {
            required: true
          },
          prenom: {
            required: true
          },
          mail: {
            required: true,
          },          
          telephone: {
            required: true,
            minlength: 10,
            maxlength: 10,
          },          
          sujet: {
            required: true
          },          
          message: {
            required: true
          }
        },
        // Specify validation error messages
        messages: {
          nom: "Merci d'entrer votre nom.",
          prenom: "Merci d'entrer votre prenom.",
          mail: {
            required: "Merci d'entrer votre mail",
          },
          telephone: {
            required: "Merci d'entrer votre numero de telephone",
            minlength: "Votre numero de telephone doit contenir 10 numero maximum",
            maxlength: "Votre numero de telephone est trop long"
          },
          sujet: "Merci de selectionner le sujet",
          message: "Merci d'entrer votre message"
        },
        submitHandler: function(form) {
          form.submit();
        }
      });
    });    
  	</script>
</main>
<?php require ("Footer/footer.php");?>