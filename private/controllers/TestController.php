<?php

class TestController
{
    public function actionList()
    {
       require_once __DIR__ . '/../../public_html/views/html/test.html';
        return true;
    }

}
?>