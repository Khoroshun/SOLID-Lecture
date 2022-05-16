<?php
/*
* SOLID
* L - Принцип  подстановки Барбары Лисков
*
*/

	$bird = new Bird();
	// $bird = new Duck();
	// $bird = new Penguin();
	$birdRun = BirdRun($bird);
	$birdRun->run();