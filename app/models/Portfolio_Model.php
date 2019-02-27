<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Portfolio_Model
 *
 * @author web
 */
class Portfolio_Model extends Model {

    public function all() {
	return array(
	    array(
		'year' => '2012',
		'site' => 'http://DunkelBeer.ru',
		'description' => 'Промо-сайт темного пива Dunkel от немецкого производителя Löwenbraü выпускаемого в России пивоваренной компанией "CАН ИнБев".'
	    ),
	    array(
		'year' => '2012',
		'site' => 'http://ZopoMobile.ru',
		'description' => 'Русскоязычный каталог китайских телефонов компании Zopo на базе Android OS и аксессуаров к ним.'
	    ),
		// todo
	);
    }

}
