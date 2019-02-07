<?php

class GamesController
{
    public function actionList()
    {
       require_once __DIR__ . '/../../public_html/views/html/games.html';
        return true;
    }

}
?>