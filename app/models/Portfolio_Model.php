<?php


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
