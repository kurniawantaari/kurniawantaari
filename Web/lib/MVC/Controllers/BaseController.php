<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace lib\MVC\Controllers;

/**
 * Description of BaseController
 *
 * @author Eko
 */
abstract class BaseController {
    protected $urlParams;
    protected $action;

    public function __construct($action, $urlParams) {
        $this->action = $action;
        $this->urlParams = $urlParams;
    }
/**
 * Menjalankan aksi dari controller tertentu
 */
    public function ExecuteAction() {
        return $this->{$this->action}();
    }

    /**
     * Me-load view yang tepat
     * @param type $viewModel
     * @param type $fullView
     */
    protected function RenderView($viewModel, $fullView = true) {
        $classData = explode("\\", get_class($this));
        $className = end($classData);

        $content = __DIR__ .
               "/../../../views/" .
               $className . "/" .
               $this->action . ".php";

        if ($fullView) {
            require __DIR__ . "/../../../views/layout.php";
        } else {
            require $content;
        }
    }
}
