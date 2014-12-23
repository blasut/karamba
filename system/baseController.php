<?php

/**
* baseControler
*/
abstract class baseController {
	
	protected $registry;
	
	protected $load;
	
	public function __construct() {
		$this->registry = Registry::getInstance();
		$this->load = new Load();
	}
	
	abstract function index();
	
	final public function __get($key) {
		if($return = $this->registry->$key) {
			return $return;
		}
		return false;
	}
}
