<?php

class BirdRun {

	private $bird;

	public function __constructor(Bird $bird)
	{
		$this->bird = $bird;
	}

	public function run(){
		$flySpeed = $this->bird->fly();
		//...
	}
}