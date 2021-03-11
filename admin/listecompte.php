<?php require"../admin.php";?>
		<div class="droit">			
			<form method="POST">				
				<table>
					<thead>
						<th>Nom</th>
						<th>Prénom</th>
						<th>Mail</th>
						<th>Modifier</th>
						<th>Supprimer</th>
					</thead>
					<tbody>
						<?php foreach ($resuser as $ligne) {?>
						<tr>
							<td><?php echo $ligne['nom'] ?></td>
							<td><?php echo $ligne['prenom'] ?></td>
							<td><?php echo $ligne['email'] ?></td>
							<td><a href="modifcompte.php?id=<?php echo $ligne['idUtilisateur'];?>"><i class="fas fa-edit"></i></a></td>
							<td><a href="deletecompte.php?id=<?php echo $ligne['idUtilisateur'];?>"><i class="fas fa-trash-alt"></i></a></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</form>
		</div>
	</div>
</main>
<?php require "../Footer/footer.php"; ?>
