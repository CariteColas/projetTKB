<form class="form-horizontal" action="" method="POST">


	<div class="form-group">
		<label class="col-sm-2 control-label">titre</label>
		<div class="col-sm-10"><?php echo $this->oArticle->titre ?></div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">resume</label>
		<div class="col-sm-10"><?php echo $this->oArticle->resume ?></div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">auteur_id</label>
		<div class="col-sm-10"><?php echo $this->tJoinmodel_auteur[$this->oArticle->auteur_id]?></div>
	</div>


<input type="hidden" name="token" value="<?php echo $this->token?>" />
<?php if($this->tMessage and isset($this->tMessage['token'])): echo $this->tMessage['token']; endif;?>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
		<input class="btn btn-danger" type="submit" value="Confirmer la suppression" /> <a class="btn btn-link" href="<?php echo $this->getLink('article::list')?>">Annuler</a>
	</div>
</div>
</form>
