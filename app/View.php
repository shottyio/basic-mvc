<?php

namespace App;

class View
{
    public function render($view, array $data = [])
    {
        if(!empty($data))  extract($data);

        require ('../views/' . $view . '.php');
    }
}