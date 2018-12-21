<?php

class MainController
{
    public function actionPage()
    {
       require_once __DIR__ . '/../views/html/main.html';
        return true;
    }

}
?>