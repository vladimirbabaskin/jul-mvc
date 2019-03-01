<?php
    abstract class Controller
    {
        public $view;
        public $db;
        public function __construct()
        {
            $this->view = new Views();
        }
        abstract public function index();
    }