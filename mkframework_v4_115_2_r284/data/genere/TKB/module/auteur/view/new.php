<?php 
$oForm=new plugin_form($this->oAuteur);
$oForm->setMessage($this->tMessage);
?>
<form  class="form-horizontal" action="" method="POST" >

	
	<div class="form-group">
		<label class="col-sm-2 control-label">nom</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('nom',array('class'=>'form-control'))?></div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">prenom</label>
		<div class="col-sm-10"><?php echo $oForm->getSelect('prenom',$this->tJoinmodel_auteur,array('class'=>'form-control'));?></div>
	</div>


<?php echo $oForm->getToken('token',$this->token)?>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
		<input type="submit" class="btn btn-success" value="Modifier" /> <a class="btn btn-link" href="<?php echo $this->getLink('auteur::list')?>">Annuler</a>
	</div>
</div>
</form>
