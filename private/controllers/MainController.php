<?php

class MainController
{
    public function actionPage()
    {
       require_once __DIR__ . '/../../public_html/views/html/main.html';
        return true;
    }

}
?>