<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Advertise_Model extends Model{
    protected $table = 'advertisement';
    public $timestamps = false;
    protected $fillable = ["adid","userid","advertiser","division","city","area","adtype","price","addate","contact","email","address","image"];
}