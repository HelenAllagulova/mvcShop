<?php

/**
 * Created by PhpStorm.
 * User: rus
 * Date: 05.08.16
 * Time: 19:31
 */
class adminLoginFormClass
{
    public function Render()
    {
        ob_start();
        include('../views/templates/adminLoginForm.html');
        $path = ob_get_clean();
        return $path ;
    }
}
