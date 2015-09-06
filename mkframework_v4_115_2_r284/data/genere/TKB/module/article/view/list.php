<table class="table table-striped">
	<tr>
		
		<th>titre</th>

		<th>resume</th>

		<th>auteur_id</th>

		<th></th>
	</tr>
	<?php if($this->tArticle):?>
		<?php foreach($this->tArticle as $oArticle):?>
		<tr <?php echo plugin_tpl::alternate(array('','class="alt"'))?>>
			
		<td><?php echo $oArticle->titre ?></td>

		<td><?php echo $oArticle->resume ?></td>

		<td><?php if(isset($this->tJoinmodel_auteur[$oArticle->auteur_id])){ echo $this->tJoinmodel_auteur[$oArticle->auteur_id];}else{ echo $oArticle->auteur_id ;}?></td>

			<td>
				
				
<a class="btn btn-success" href="<?php echo $this->getLink('article::edit',array(
										'id'=>$oArticle->getId()
									) 
							)?>">Edit</a>

<a class="btn btn-danger" href="<?php echo $this->getLink('article::delete',array(
										'id'=>$oArticle->getId()
									) 
							)?>">Delete</a>

<a class="btn btn-default" href="<?php echo $this->getLink('article::show',array(
										'id'=>$oArticle->getId()
									) 
							)?>">Show</a>

				
				
			</td>
		</tr>	
		<?php endforeach;?>
	<?php else:?>
		<tr>
			<td colspan="4">Aucune ligne</td>
		</tr>
	<?php endif;?>
</table>

<p><a class="btn btn-primary" href="<?php echo $this->getLink('article::new') ?>">New</a></p>

