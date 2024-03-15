<?php

namespace Power\Ethereal\Controllers\Admin;

use Power\Ethereal\Commons\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // $account['accounts'] = $_SESSION['user'];
        return $this->renderViewAdmin('dashboard');
    }
}
