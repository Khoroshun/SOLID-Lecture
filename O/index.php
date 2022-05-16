<?php
/*
* SOLID
* O - должна быть возможность расширять поведение классов, не изменяя его.
*
*/

	$logger = new Logger();
	$product = new Product();
	$product->setPrice(10);