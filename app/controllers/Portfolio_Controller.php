<?php


class Portfolio_Controller extends Controller {
    
    public function __construct() {
	parent::__construct();
	$this->model = new Portfolio_Model();
    }
    
    public function index() {
	$this->view->portfolio = $this->model->all();
	$this->view->render('portfolio_index_view', 'main_template');
    }
    public function add() {
	$this->view->render('portfolio_add_view', 'main_template');
    }
}
