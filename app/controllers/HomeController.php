<?php
namespace App\Controller;

use App\Model\Employer;

class HomeController
{
    public function index()
    {
        $emp = Employer::all();
        require_once "../app/views/collection/listemploy.php";
    }
}