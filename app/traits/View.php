<?php

namespace app\traits;

use app\src\Load;

trait View {
    protected $twig;

    protected function twig() {
        $loader =  new \Twig\Loader\FilesystemLoader('../app/views/');

        $this->twig = new \Twig\Environment($loader, [
            'debug' => true,
        ]);
    }

    public function functions()
    {
        $functions = Load::file('/app/functions/twig.php');

        foreach($functions as $function) {
            $this->twig->addFunction($function);
        }
    }

    protected function load() {
        $this->twig();

        $this->functions();
    }

    public function view($view, $data) {
        $this->load();
    
        $template = $this->twig->load(str_replace('.', '/', $view).'.twig');

        return $template->render($data);
    }
}