<?php
    class Products_Controller extends Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->db = new Products_Model;
        }
        public function index()
        {
            $this->view->products = $this->db->getAll();
            $this->view->render('products_index_view', 'main_template');
        }
        public function add()
        {
            $this->view->render('product_add_view', 'main_template');
        }
        public function delete()
        {
            $id = filter_input(INPUT_POST, "id");
            $this->view->products = $this->db->delete($id);
            self::index();
        }
        public function save() {
            $name = filter_input(INPUT_POST, "name");
            $price = filter_input(INPUT_POST, "price");
            $photo = filter_input(INPUT_POST, "photo");
            $description = filter_input(INPUT_POST, "description");
            $this->view->products = $this->db->save(
                    $name,
                    $price,
                    $photo,
                    $description
            );
            self::index();
        }
    }