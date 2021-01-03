<?php

class StoreController
{
    private $render;

    public function __construct($render,$model)
    {
        $this->render = $render;
        $this->model = $model;
    }

    public function execute()
    {
        $data = array();
        $data["productos"] = $this->model->getProductos();
        echo $this->render->render("view/store.php",$data);
    }
}