<?php

class FilmsController
{
    public function actionList()
    {
       require_once __DIR__ . '/../../public_html/views/html/films.html';
        return true;
    }

}
?>