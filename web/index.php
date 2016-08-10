<meta charset="utf-8">
<?php

require_once '../autoload.php';
require_once '../config/configuration.php';

$arrPath = explode('/', strtolower($_SERVER['REQUEST_URI']) );// как попадает uri в массив с ключем path
array_shift($arrPath);


switch ($arrPath[0]) {
    case 'customer':
           $controller_name= $arrPath[0].'Controller';
           $controller = new $controller_name;

        switch ($arrPath[1]){

            case 'catalog':
                $content_catalog = $controller->catalogData();
                $view_path = '../views/templates/customer/catalogTovaruTable.html';
                $view_object = new View($content_catalog, $view_path);
                $content = $view_object->render();
                break;
            case 'tovaru':
                $content_tovaru  = $controller->tovaruData();
                $view_path = '../views/templates/customer/catalogTovaruTable.html';
                $view_object = new View($content_tovaru, $view_path);
                $content = $view_object->render();
                break;
                              
        }
        break;
    case 'admin':  // ссылки вида {имя_сайта}/admin/*

        switch ($arrPath[1])  {
            case 'signin':              // ссылки вида {имя_сайта}/admin/singin/ (*)

                $parameters = explode('?', $arrPath[2]) ? : [];
                $parameters = array($arrPath[2]);
                $loginController = new adminLoginController($parameters);

                $content = $loginController->getResponce();
                break;

            default:
            $content = implode('.', $arrPath);
        }
         

    default: // user controllers

}
ob_start();
include '../views/pages/main/header.html';
include '../views/pages/main/menu.html';
include '../views/pages/main/content.html';
include '../views/pages/main/footer.html';
$page = ob_get_clean();
echo $page;