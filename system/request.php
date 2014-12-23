<?php

/**
*	Request 
*/
class Request {
	
	private $controller;
	
	private $method;
	
	private $args;
	
	public function __construct() {
		$parts = explode('/', $_SERVER['REQUEST_URI']);
		$parts = array_filter($parts);
		
		// Check here if it's in a subdir... Maybe htaccess?
		array_shift($parts);
		
		
		/* 
		check if the controller actually is a directory... Do this for all of the URI string until a file
		which is correct and usable is encountered. 
		
		Or skip the check if it is usable and leave that to the router?
		
		Just check for when the controller is a file... This should let the user have as many subdirs as they want.
		*/
		$this->controller = ($c = array_shift($parts)) ? $c : 'index';
		$this->method = ($c = array_shift($parts)) ? $c : 'index';
		$this->args = (isset($parts[0])) ? $parts : array();
	}
	
	public function getController() {
		return $this->controller;
	}
	
	public function getMethod() {
		return $this->method;
	}
		
	public function getArgs() {
		return $this->args;
	}
}
