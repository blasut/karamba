<?php

/**
* Registry
*/
class Registry {
	
	private $storage;
	
	private static $instance;
	
	private function __construct() {
		"consctruct called";
	}
	
	public static function getInstance() {
		if(!self::$instance instanceof self) {
			self::$instance = new Registry();
		}
		return self::$instance;
	}
	
	public function __set($key, $val) {
		$this->storage[$key] = $val;
	}
	
	public function __get($key) {
		if(isset($this->storage[$key])) {
			return $this->storage[$key];
		}
		return false;
	}
}
