<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Property_Model extends Model{
    protected $table = 'property';
    public $timestamps = false;
    protected $fillable = ["adid","ptype","bed","bath","lift","garage","description","nego","appoinment","nearby","psize","pname"];
}