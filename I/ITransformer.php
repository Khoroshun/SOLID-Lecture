<?php

/*
* SOLID
* I - Клиенты не должны зависеть от интерфейсов, которые они не используют
*
*/


inteface ISuperTransformer{

	public function toCar();
	public function toPlane();
	public function toShip();
}