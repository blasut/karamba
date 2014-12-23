<?php

class Load {
	public function view($name, array $data = null) {
		$file = SITE_PATH . 'views/' . $name . 'View.php';
		
		if(is_readable($file)) {
			if(isset($data)) {
				extract($data);
			}
			require($file);
			return true;
		}
	}
		
	public function model($name) {
		$model = $name . 'Model';
		$modelPath = APP_PATH . 'models/' . $model . '.php';
		
		if(is_readable($modelPath)) {
			require_once($modelPath);
			
			if(class_exists($model)) {
				$registry = Registry::getInstance();								
				$registry->$name = new $model;
			} else {
				return false;
			}
		} else {
			// hm
			return false;
		}
	}
}