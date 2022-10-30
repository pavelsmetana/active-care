<?php

namespace App\Controller;

class Controller
{
    public function render(string $view, array $params = [])
    {
        ob_start();
        extract($params);
        include __DIR__ . "/../View/{$view}.php";
        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }
}