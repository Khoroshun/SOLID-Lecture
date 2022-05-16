<?php

class SuperTransformer implements ISuperTransformer {

	public function toCar(){
		echo 'transform to car';
	}

	public function toPlane(){
		echo 'transform to plane';
	}

	public function toShip(){
		echo 'transform to ship';
	}
}

class CarTransformer implements ISuperTransformer {

	public function toCar(){
		echo 'transform to car';
	}

	public function toPlane(){
		// ...
	}

	public function toShip(){
		// ..
	}
}