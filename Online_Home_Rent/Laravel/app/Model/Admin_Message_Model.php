<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Admin_Message_Model extends Model{
    protected $table = 'admin_message';
    public $timestamps = false;
    protected $fillable = ["mszid","msz","date","admin_name"];
}