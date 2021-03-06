<?php
class module_moduleJsonIndex{
	
	
	
	public function _index(){
	
		if(_root::getParam('config')==''){
			return $this->xmlindexselect();
		}
	
		module_builder::getTools()->rootAddConf('conf/connexion.ini.php');
		$msg='';
		$detail='';
		$tTables=array();
		$tTableColumn=array();
		
		$sConfig= _root::getParam('config');
		$tTables=module_builder::getTools()->getListTablesFromConfig( $sConfig );
		$tTableColumn=array();
		foreach($tTables as $sTable){
			$tTableColumn[$sTable]=module_builder::getTools()->getListColumnFromConfigAndTable($sConfig,$sTable);
		}
		
		$tFileIndex=array();
		if(_root::getParam('sTable')!=''){
			$oDir=new _dir(_root::getConfigVar('path.generation')._root::getParam('id').'/data/json/base/'._root::getParam('sTable').'/index');
			if(!$oDir->exist()){
				$oDir->save();
			}
			$tFile=array();
			foreach($oDir->getListDir() as $oFile){
				if(preg_match('/.index/',$oFile->getName())) 
				$tFileIndex[]=$oFile->getName();
			}
		}
		
		if(_root::getParam('regenerateIndexXml')!=''){
			$this->regenerateIndexXml($sConfig,_root::getParam('sTable'),_root::getParam('regenerateIndexXml'));
		}

	
		if(_root::getRequest()->isPost()){
			$sTable=_root::getParam('sTable');
			$tField=_root::getParam('tField');
			
			module_builder::getTools()->projetmkdir('data/json/base/'.$sTable.'/index');
			
			module_builder::getTools()->projetmkdir('data/json/base/'.$sTable.'/index/'.implode('.',$tField).'.index' );

			$this->regenerateIndexXml($sConfig,$sTable,implode('.',$tField).'.index');

			$msg='Index '.implode('.',$tField).' sur la table '.$sTable.' g&eacute;n&eacute;r&eacute; avec succ&egrave;s';
			$detail='Cr&eacute;ation repertoire data/json/base/'.$sTable.'/index';
			$detail.='<br />Cr&eacute;ation repertoire index data/json/base/'.$sTable.'/index/'.implode('.',$tField);
			$detail.='<br />Reg&eacute;n&eacute;ration de l\'index';
			
			
		}
	
		$oTpl= new _Tpl('moduleJsonIndex::index');
		$oTpl->msg=$msg;
		$oTpl->detail=$detail;
		$oTpl->tTables=$tTables;
 		$oTpl->tTableColumn=$tTableColumn;

		$oTpl->tFileIndex=$tFileIndex;
		return $oTpl;
	}
	
	private function xmlindexselect(){
		module_builder::getTools()->rootAddConf('conf/connexion.ini.php');
	
		$oTpl= new _Tpl('moduleJsonIndex::indexselect');
		$oTpl->tConnexion=_root::getConfigVar('db');
		
		return $oTpl;
	}
	public function regenerateIndexXml($sConfig,$sTable,$sIndex){
		//$sConfig='xml';

		if( _root::getConfigVar('db.'.$sConfig.'.sgbd') == 'xml' ){
			if( !file_exists( _root::getConfigVar('db.'.$sConfig.'.database') ) ){
				$sBuilderDbPath=_root::getConfigVar('path.data').'genere/'._root::getParam('id').'/public/'._root::getConfigVar('db.'.$sConfig.'.database');
				if( file_exists($sBuilderDbPath) ){
					_root::setConfigVar('db.'.$sConfig.'.database',$sBuilderDbPath);
				}else{
					throw new Exception('Base inexistante '._root::getConfigVar('db.'.$sConfig.'.database').' ni '.$sBuilderDbPath );
				}
			}
		}
		else if( _root::getConfigVar('db.'.$sConfig.'.sgbd') == 'csv' ){
			if( !file_exists( _root::getConfigVar('db.'.$sConfig.'.database') ) ){
				$sBuilderDbPath=_root::getConfigVar('path.data').'genere/'._root::getParam('id').'/public/'._root::getConfigVar('db.'.$sConfig.'.database');
				if( file_exists($sBuilderDbPath) ){
					_root::setConfigVar('db.'.$sConfig.'.database',$sBuilderDbPath);
				}else{
					throw new Exception('Base inexistante '._root::getConfigVar('db.'.$sConfig.'.database').' ni '.$sBuilderDbPath );
				}
			}
		}else if( _root::getConfigVar('db.'.$sConfig.'.sgbd') == 'json' ){
			if( !file_exists( _root::getConfigVar('db.'.$sConfig.'.database') ) ){
				$sBuilderDbPath=_root::getConfigVar('path.data').'genere/'._root::getParam('id').'/public/'._root::getConfigVar('db.'.$sConfig.'.database');
				if( file_exists($sBuilderDbPath) ){
					_root::setConfigVar('db.'.$sConfig.'.database',$sBuilderDbPath);
				}else{
					throw new Exception('Base inexistante '._root::getConfigVar('db.'.$sConfig.'.database').' ni '.$sBuilderDbPath );
				}
			}
		}
		
		
		$oModelFactory=new model_mkfbuilderfactory();
		$oModelFactory->setConfig( $sConfig);
		return $oModelFactory->getSgbd()->generateIndexForTable($sTable,$sIndex);

		
	}

	
}
