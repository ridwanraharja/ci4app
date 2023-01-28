<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index($nama = '', $umur = 0)
    {
        // return view('welcome_message');
        echo "coba aja $nama, saya juga udah coba $umur";
    }
}