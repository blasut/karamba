<?php

class WelcomeController extends baseController {
	
	public function index() {
		echo "Hej";
		
	}
	
	public function test($a, $b) {
		echo "hej";
		echo $a;
		echo $b;
	}
	
}