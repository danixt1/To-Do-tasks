<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string{
        $result = file_get_contents("../public/index.html");
        if(!$result){
            $this->response->setStatusCode(500);
            return "500 Internal Error";
        }
        return $result;
    }
}
