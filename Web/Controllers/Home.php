<?php

namespace Controllers;

use lib\MVC\Controllers\BaseController;

class Home extends BaseController {
    protected function Index() {
        $viewModel = "DATA";
        $this->RenderView($viewModel);
    }
}