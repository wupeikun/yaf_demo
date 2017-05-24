<?php
class IndexController extends Yaf_Controller_Abstract{
	public function indexAction(){ //default action
		$this -> getView() -> assign("content","Hello World");
	}
}
?>
