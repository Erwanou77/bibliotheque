<?php require"../admin.php"; ?>
		<div class="droit">
			<h2>Entrez les informations de votre livre</h2>
			<div class="form">
				<form method="POST" class="update">
					<div class="group-input">
						<div class="form-input">
							<label for="titre">Titre :</label>
							<input type="text" class="pres-input" name="titre">
						</div>
						<div class="form-input">
							<select class="pres-input">
								<option value="">Editeur</option>
								<option value="">Editeur</option>
							</select>
						</div>
						<div class="form-input">
							<label>Auteur :</label>
							<input class="pres-input" type="text" name="">
						</div>
						<div class="form-input">
							<label>Année :</label>
							<input type="text" class="pres-input" name="">
						</div>
						<div class="form-input">
							<label>ISBN :</label>
							<input type="text" class="pres-input" name="">
						</div>
						<div class="form-input">
							<select class="pres-input">
								<option value="">Genre</option>
								<?php foreach ($pdostat as $ligne) { ?>
									<option value=""><?php echo $ligne['genre'] ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
				</form>
			</div>
		</div>
</main>
<?php require "../Footer/footer.php"; ?>
