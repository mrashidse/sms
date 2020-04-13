<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    protected $viewBase;

    public function __construct()
    {
        $this->viewBase = 'frontend';
    }
}
