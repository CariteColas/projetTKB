<?php 
$oForm=new plugin_form($this->oArticle);
$oForm->setMessage($this->tMessage);
?>
<form  class="form-horizontal" action="" method="POST" >

	
	<div class="form-group">
		<label class="col-sm-2 control-label">titre</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('titre',array('class'=>'form-control'))?></div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">resume</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('resume',array('class'=>'form-control'))?></div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">auteur_id</label>
		<div class="col-sm-10"><?php echo $oForm->getSelect('auteur_id',$this->tJoinmodel_auteur,array('class'=>'form-control'));?></div>
	</div>


<?php echo $oForm->getToken('token',$this->token)?>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
		<input type="submit" class="btn btn-success" value="Modifier" /> <a class="btn btn-link" href="<?php echo $this->getLink('article::list')?>">Annuler</a>
	</div>
</div>
</form>
