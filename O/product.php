<?php


class Product
{
	private $logger;
	
	public function __constructor(ILogger $logger){
		$this->logger = $logger;
	}

	public function setPrice($price){
		try {
			//save price in db
		} catch (DbException $e) {
			$this->logError($e->getMessage());
		}
	}

}