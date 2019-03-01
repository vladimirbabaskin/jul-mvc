<?php
    /**
     * Description of Product_Model
     * @author web
     */
    class Products_Model extends Model
    {
        /**
         * @var mysqli
         */
        public $db;
        public function __construct()
        {
            $this->db = new mysqli('localhost', 'root', '', "jul-prod");
            if ($this->db->connect_errno) {
                die($this->db->connect_error);
            }
        }
        public function getAll()
        {
            $query = "SELECT * FROM `jul-prod`.`products`";
            $result = $this->db->query($query);
            if (!$result) {
                die($this->db->error);
            }
            $product = $result->fetch_all(MYSQLI_ASSOC);
            //var_dump($product);
            return $product;
        }
        public function delete($id)
        {
            $query = "DELETE FROM `jul-prod`.`products` WHERE `products`.`id` = $id";
            $result = $this->db->query($query);
            if (!$result) {
                die($this->db->error);
            }
        }
        public function save($name, $price, $photo, $description) {
            $query =
                    "
                        INSERT
                            IGNORE
                                INTO `jul-prod`.`products`
                                    VALUES(
                                        NULL,
                                        '$name',
                                        $price,
                                        '$photo',
                                        '$description'
                                    );
                    ";
            $result = $this->db->query($query);
            if (!$result) {
                die($this->db->error);
            }
        }
    }