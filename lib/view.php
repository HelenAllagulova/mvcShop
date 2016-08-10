<?php
class View{
    
    protected  $data;
    protected $path;
    
    public function __construct($data, $path)
    {
        $this->data = $data;
        $this->path = $path;
    }

    public function render(){
        $data = $this->data;
        
        ob_start();
        include $this->path;
        $result = ob_get_clean();
        return $result;
    }
}