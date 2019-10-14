<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class User_Model extends Model{
    protected $table = 'users';
    public $timestamps = false;
    protected $fillable = ["userid","username","email","password"];
}