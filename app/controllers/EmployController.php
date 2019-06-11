<?php
namespace App\Controller;

use App\Model\Employer;
use App\Model\Gallery;
use Illuminate\Database\Capsule\Manager as DB;

class EmployController
{
    public function index()
    {
        $emps = Employer::all();
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
            $employer->description = $_POST['description'];
            $employer->namecollection = $_POST['namecollection'];
            $imgURL = $_FILES["imgcollection"]["name"];
            for($i=0;$i<count($_FILES["imgcollection"]["name"]);$i++){
                DB::table('image')->insert([
                    'collection_id' => $employer->regist_num,
                    'img_url' =>  $target_dir.$imgURL[$i],
                ]);
                $tmp = $_FILES['imgcollection']["tmp_name"];
                move_uploaded_file($tmp[$i], $target_dir.$imgURL[$i]);
            }
            $this->uploadImage('avatar');
            $employer->save();
            header('location:' . 'list');
        }
        else{

        }
    }

    public function detailEmployer()
    {
        $id = $_GET['id'];
        $emp = Employer::find($id);
        $gallerys = Gallery::where('collection_id', $emp->regist_num)->get();
        $this->loadData('employer/detail_employ', ['emp' => $emp, 'gallerys' => $gallerys]);
    }

    public function editEmployer()
    {
        $id = $_GET['id'];    
        $emp = Employer::find($id);
        $gallerys = Gallery::where('collection_id', $emp->regist_num)->get();   
        $this->loadData('employer/edit_employ',['emp'=>$emp, 'gallerys'=>$gallerys]);
    }

    public function updateEmployer()
    {   
        $id = $_POST['id'];
        $employer = Employer::find($id);
        $target_dir = "image/";
        $employer->name = $_POST['name'];
        $employer->address = $_POST['adress'];
        $employer->regist_num = $_POST['regist_num'];
        $employer->avatar =  $target_dir.$_FILES["avatar"]["name"];
        $employer->description = $_POST['description'];
        $employer->namecollection = $_POST['namecollection'];
        $imgURL = $_FILES["imgcollection"]["name"];
        for($i=0;$i<count($_FILES["imgcollection"]["name"]);$i++){
            DB::table('image')->insert([
                'collection_id' => $employer->regist_num,
                'img_url' =>  $target_dir.$imgURL[$i],
            ]);
            $tmp = $_FILES['imgcollection']["tmp_name"];
            move_uploaded_file($tmp[$i], $target_dir.$imgURL[$i]);
        }
        $this->uploadImage('avatar');
        $employer->update();
        header('location:' . 'list');
    }

    public function deleteEmployer()
    {
        $id = $_GET['id'];
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

    public function uploadImage($name)
    {
        if(isset($_FILES[$name])){
            $error = array();
            $imgName = $_FILES[$name]['name'];
            $imgSize = $_FILES[$name]['size'];
            $imgTMP = $_FILES[$name]['tmp_name'];
            $imgType = $_FILES[$name]['type'];
            $imgUrl = explode('.',$_FILES[$name]['name']);
            $format = end($imgUrl);
            $expensions = array('jpeg', 'jpg', 'png', 'pdf');
            if(in_array($expensions, [$format]) === false){
                $error[] = "Format Error";
            }
            if($imgSize > 20480000){
                $error[] = "Too Large";
            }
            if(empty($error) == true){
                $target_dir = "image/";
                $target_file = $target_dir . basename($imgName);
                move_uploaded_file($imgTMP, $target_file);
            }
        }
       
    }

    public function alert()
    {
        echo "<script>";
        echo "alert('id not found')";
        echo "</script>";
    }
}