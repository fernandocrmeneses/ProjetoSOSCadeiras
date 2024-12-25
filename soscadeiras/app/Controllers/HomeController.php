<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index(): string
    {
        return view('templates/header') . view('pages/home') . view('templates/contato') . view('templates/footer');
    }
}
