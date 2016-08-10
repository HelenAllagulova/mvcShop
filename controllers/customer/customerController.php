<?php
class customerController {
    
    protected $model;
    protected $data;
    
    public function __construct()
    {
        $this->model = new catalogTovaruModel;
    }


    public function catalogData(){
        $data = $this->data = $this->model->getCatalog();
        return $data;
    }
    
    public function tovaruData(){
        $data = $this->data = $this->model->getTovaru();
        return $data;
    }
}