<?php
/*
* SOLID
* D - Принцип  инверсии зависимостей
*
*/

class HardDependency{

	public function sendMessage($message){

		$sender = new Sender();
		$sendResult = $sender->send();
	}
}

class MiddleDependency{
	
	private $sender;

	public function __constructor(Sender $sender)
	{
		$this->sender = $sender;
	}

	public function sendMessage($message){

		$sendResult = $this->sender->send();
	}

}

class LowDependency{
	
	private $senderMessages;

	public function __constructor(ISenderMessages $senderMessages)
	{
		$this->senderMessages = $senderMessages;
	}

	public function sendMessage($message){

		$sendResult = $this->senderMessages->send();
	}
}