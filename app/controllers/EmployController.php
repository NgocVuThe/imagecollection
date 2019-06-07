<?php
namespace App\Controller;

use App\Model\Employer;

class EmployController
{
    public function index()
    {
        $emp = Employer::all();
        $this->loadData('employer/listemploy',['emp' => $emp]);
    }
    
    public function loadData($view, $data = [])
    {
        $data = extract($data);
        $view = "app/views/backend" . $view .".php";
        require_once "../app/views/layouts/adminlayout/masterlayout.php";
    }    
}