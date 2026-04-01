<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('navbar');
        echo view('about');
        echo view('footer');
    }
}