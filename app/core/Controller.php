<?php


abstract class Controller {
    
    public  $view;
    public function __construct() {
	$this->view = new Views();
    }
    
    abstract public function index();	
  
}
