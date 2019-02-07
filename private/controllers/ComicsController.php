<?php

class ComicsController
{
    public function actionList()
    {
       require_once __DIR__ . '/../../public_html/views/html/comics.html';
        return true;
    }

}
?>