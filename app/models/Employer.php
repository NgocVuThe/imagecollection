<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $table = 'employ';
    protected $columns = [
        'name',
        'address',
        'namecollection',
        'regist_num',
        'avatar',
        'description'
    ];
    public $timestamps = false;
}