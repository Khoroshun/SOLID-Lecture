<?php


// class Logger
// {
	
// 	private function saveToFile($message){
// 		//...
// 	}

// 	public function log($message){
// 		// ...
// 		$this->saveToFile($message);
// 	}
// }








inteface ILogger{
	public function log($message){}
}






class FileLogger implements ILogger {

	private function saveToFile($message){
		//...
	}

	public function log($message){
		// ...
		$this->saveToFile($message);
	}

}


class DBLogger implements ILogger {

	private function saveToDB($message){
		//...
	}

	public function log($message){
		// ...
		$this->saveToFile($message);
	}
	
}