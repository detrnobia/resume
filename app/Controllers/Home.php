<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string     //single public method
    {
        return view('resume');
    }
}
