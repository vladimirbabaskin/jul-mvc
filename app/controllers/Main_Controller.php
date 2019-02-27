<?php

class Main_Controller extends Controller {

    public function index() {
	$this->view->render('index_view', 'main_template');
    }

}
