<?php
    class Views
    {
        //public $products;
        public function render($content_view, $template_view)
        {
            include_once '..' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $template_view . '.php';
        }
    }
