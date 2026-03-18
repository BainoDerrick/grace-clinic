<?php

namespace App\Controllers;

class Doctors extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('navbar');
        echo view('doctors');
        echo view('footer');
    }
}