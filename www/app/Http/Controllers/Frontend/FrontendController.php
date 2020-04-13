<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    protected $viewBase;

    public function __construct()
    {
        $this->viewBase = 'frontend';
    }
}
