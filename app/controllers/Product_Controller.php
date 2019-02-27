<?php


class Product_Controller extends Controller {
    
    public function __construct() {
	parent::__construct();
	$this->model = new Product_Model;
    }
    
    public function index() {
	$this->view->product = $this->model->all();
	$this->view->render('product_index_view', 'main_template');
    }
    public function add() {
	$this->view->render('product_add_view', 'main_template');
    }
    public function delete() {
	$this->view->render('product_delete_view', 'main_template');
    }
}
