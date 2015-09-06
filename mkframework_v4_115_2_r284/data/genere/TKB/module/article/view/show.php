<form class="form-horizontal" action="" method="POST" >
	
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


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
		 <a class="btn btn-default" href="<?php echo $this->getLink('article::list')?>">Retour</a>
	</div>
</div>
</form>
