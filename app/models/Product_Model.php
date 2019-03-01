<?php
    /**
     * Description of Product_Model
     * @author web
     */
    class Product_Model extends Model
    {
        /**
         * @var mysqli
         */
        public $db;
        public function __construct()
        {
            $this->db = new mysqli('localhost', 'root', '', `jul-prod`);
            if ($this->db->connect_errno !== 0) {
                die($this->db->connect_error);
            }
        }
        public function getProduct()
        {
            $query = "SELECT * FROM `products`";
            $result = $this->db->query($query);
            if (!$result) {
                die($this->db->error);
            }
            $product = $result->fetch_all(MYSQLI_ASSOC);
            return $product;
        }
    }