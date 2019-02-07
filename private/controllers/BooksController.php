<?php

class BooksController
{
    public function actionIndex()
    {
       require_once __DIR__ . '/../../public_html/views/html/books.html';
        return true;
    }

}
?>