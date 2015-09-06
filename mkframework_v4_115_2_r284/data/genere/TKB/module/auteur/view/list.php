<table class="table table-striped">
	<tr>
		
		<th>nom</th>

		<th>prenom</th>

		<th></th>
	</tr>
	<?php if($this->tAuteur):?>
		<?php foreach($this->tAuteur as $oAuteur):?>
		<tr <?php echo plugin_tpl::alternate(array('','class="alt"'))?>>
			
		<td><?php echo $oAuteur->nom ?></td>

		<td><?php if(isset($this->tJoinmodel_auteur[$oAuteur->prenom])){ echo $this->tJoinmodel_auteur[$oAuteur->prenom];}else{ echo $oAuteur->prenom ;}?></td>

			<td>
				
				
<a class="btn btn-success" href="<?php echo $this->getLink('auteur::edit',array(
										'id'=>$oAuteur->getId()
									) 
							)?>">Edit</a>

<a class="btn btn-danger" href="<?php echo $this->getLink('auteur::delete',array(
										'id'=>$oAuteur->getId()
									) 
							)?>">Delete</a>

<a class="btn btn-default" href="<?php echo $this->getLink('auteur::show',array(
										'id'=>$oAuteur->getId()
									) 
							)?>">Show</a>

				
				
			</td>
		</tr>	
		<?php endforeach;?>
	<?php else:?>
		<tr>
			<td colspan="3">Aucune ligne</td>
		</tr>
	<?php endif;?>
</table>

<p><a class="btn btn-primary" href="<?php echo $this->getLink('auteur::new') ?>">New</a></p>

