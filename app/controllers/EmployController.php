<?php
namespace App\Controller;

use App\Model\Employer;

class EmployController
{
    public function index()
    {
        $emps = Employer::all();
        // var_dump($emps);die;
        $this->loadData('employer/listemploy',['emps' => $emps]);
    }
    
    public function create()
    {
        $this->loadData('employer/create_employ',[]);
    }

    public function createEmployer()
    {
        $employer = new Employer();
        if (isset($_POST['btnsubmit'])) {
            $target_dir = "image/";
            $employer->name = $_POST['name'];
            $employer->address = $_POST['adress'];
            $employer->regist_num = $_POST['regist_num'];
            $employer->avatar =  $target_dir.$_FILES["avatar"]["name"];
            // var_dump($employer->avatar);die;
            $employer->description = $_POST['description'];
            $employer->namecollection = $_POST['namecollection'];
            $this->uploadImage();
            // var_dump($employer->avatar);die;
            $employer->save();
            header('location:' . 'list');
        }
    }
    public function editEmployer()
    {
        $this->loadData('employer/edit_employ',[]);
    }

    public function deleteEmployer()
    {
        $id = $_GET['id'];
        // var_dump($id);die;
        $employer = Employer::find($id);
        $employer->delete();
        header('location:' . 'list');   
    }

    public function loadData($view, $data = [])
    {
        $data = extract($data);
        $views = "../app/views/backend/" . $view .".php";
        require_once "../app/views/layouts/adminlayout/masterlayout.php";
    }
    public function uploadImage()
    {
        $target_dir = "image/";
        $target_file = $target_dir . basename($_FILES['avatar']['name']);
        // var_dump($target_file);die;
        $tmp = $_FILES["avatar"]["tmp_name"];
        // var_dump($tmp);die;
        move_uploaded_file($tmp, $target_file);
    }
}