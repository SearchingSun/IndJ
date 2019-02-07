<?php

class RegistrationController
{
    public function actionList()
    {
       require_once __DIR__ . '/../../public_html/views/html/registration.html';
        return true;
    }

}
?>