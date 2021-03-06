<?php
class module_article extends abstract_module{

	public function before(){
		$this->oLayout=new _layout('bootstrap');
		$this->oLayout->addModule('menu','menu::index');
		//$this->oLayout->addModule('menu','menu::index');
	}


	public function _index(){
	    //on considere que la page par defaut est la page de listage
	    $this->_list();
	}


	public function _list(){

		$tArticle=model_article::getInstance()->findAll();

		$oView=new _view('article::list');
		$oView->tArticle=$tArticle;

				$oView->tJoinmodel_auteur=model_auteur::getInstance()->getSelect();

		$this->oLayout->add('main',$oView);

	}



	public function _new(){
		$tMessage=$this->processSave();

		$oArticle=new row_article;

		$oView=new _view('article::new');
		$oView->oArticle=$oArticle;

				$oView->tJoinmodel_auteur=model_auteur::getInstance()->getSelect();

		$oPluginXsrf=new plugin_xsrf();
		$oView->token=$oPluginXsrf->getToken();
		$oView->tMessage=$tMessage;

		$this->oLayout->add('main',$oView);
	}



	public function _edit(){
		$tMessage=$this->processSave();

		$oArticle=model_article::getInstance()->findById( _root::getParam('id') );

		$oView=new _view('article::edit');
		$oView->oArticle=$oArticle;
		$oView->tId=model_article::getInstance()->getIdTab();

				$oView->tJoinmodel_auteur=model_auteur::getInstance()->getSelect();

		$oPluginXsrf=new plugin_xsrf();
		$oView->token=$oPluginXsrf->getToken();
		$oView->tMessage=$tMessage;

		$this->oLayout->add('main',$oView);
	}



	public function _show(){
		$oArticle=model_article::getInstance()->findById( _root::getParam('id') );

		$oView=new _view('article::show');
		$oView->oArticle=$oArticle;

				$oView->tJoinmodel_auteur=model_auteur::getInstance()->getSelect();
		$this->oLayout->add('main',$oView);
	}



	public function _delete(){
		$tMessage=$this->processDelete();

		$oArticle=model_article::getInstance()->findById( _root::getParam('id') );

		$oView=new _view('article::delete');
		$oView->oArticle=$oArticle;

				$oView->tJoinmodel_auteur=model_auteur::getInstance()->getSelect();

		$oPluginXsrf=new plugin_xsrf();
		$oView->token=$oPluginXsrf->getToken();
		$oView->tMessage=$tMessage;

		$this->oLayout->add('main',$oView);
	}


	private function processSave(){
		if(!_root::getRequest()->isPost() ){ //si ce n'est pas une requete POST on ne soumet pas
			return null;
		}

		$oPluginXsrf=new plugin_xsrf();
		if(!$oPluginXsrf->checkToken( _root::getParam('token') ) ){ //on verifie que le token est valide
			return array('token'=>$oPluginXsrf->getMessage() );
		}

		$iId=_root::getParam('id',null);
		if($iId==null){
			$oArticle=new row_article;
		}else{
			$oArticle=model_article::getInstance()->findById( _root::getParam('id',null) );
		}

		$tColumn=array('titre','resume','auteur_id');
		foreach($tColumn as $sColumn){
			$oArticle->$sColumn=_root::getParam($sColumn,null) ;
		}


		if($oArticle->save()){
			//une fois enregistre on redirige (vers la page liste)
			_root::redirect('article::list');
		}else{
			return $oArticle->getListError();
		}

	}


	public function processDelete(){
		if(!_root::getRequest()->isPost() ){ //si ce n'est pas une requete POST on ne soumet pas
			return null;
		}

		$oPluginXsrf=new plugin_xsrf();
		if(!$oPluginXsrf->checkToken( _root::getParam('token') ) ){ //on verifie que le token est valide
			return array('token'=>$oPluginXsrf->getMessage() );
		}

		$oArticle=model_article::getInstance()->findById( _root::getParam('id',null) );

		$oArticle->delete();
		//une fois enregistre on redirige (vers la page liste)
		_root::redirect('article::list');

	}



	public function after(){
		$this->oLayout->show();
	}


}
