<?php

namespace Acme\AppBundle\Twig;

class AppExtension extends \Twig_Extension{

	public function getFilters(){
		return array(
			new \Twig_SimpleFilter('price', array($this, 'priceFilter')),
			new \Twig_SimpleFilter('priceEuro', array($this, 'priceFilterEuro')),
			new \Twig_SimpleFilter('toTTC', array($this, 'toTTC')),
		);
	}

	public function priceFilter($number, $decimals = 0, $decPoint = '.', $thousandsSep = ','){
		$price = number_format($number, $decimals, $decPoint, $thousandsSep);
		$price = '$'.$price;

		return $price;
	}

	public function priceFilterEuro($number, $decimals = 0, $decPoint = '.', $thousandsSep = ' '){
		$price = number_format($number, $decimals, $decPoint, $thousandsSep);
		$price = $price.'€';

		return $price;
	}

	public function toTTC($number, $tauxTVA = 10){
		$multip = 1+($tauxTVA/100);
		$price = $number * $multip;
		return $price;
	}



	public function getName(){
		return 'app_extension';
	}
}