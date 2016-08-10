<?php

    $ROOT_DIR = __DIR__ ; //D:\xampp\htdocs\git\store
    

    function __autoload($className)
    {
        global $ROOT_DIR;

        $pathInclude = [
            'models',
            'models/admin',
            'models/customer',
            'models/ui',
            'views',
            'views/forms',
            'views/pages',
            'views/templates',
            'controllers',
            'controllers/customer',
            'controllers/admin',
            'lib',
            'config'
        ];


        foreach($pathInclude as $path) {

            $nameFile = "$ROOT_DIR/$path/$className.php";
            if (file_exists($nameFile)) {
                include_once($nameFile);
                break;
            }

        }

    }