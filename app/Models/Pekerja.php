<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pekerja extends Model
{
    protected $table ='pekerja';
    protected $guared = ['id_pekerja'];
    protected $prymaryKey = 'id';
    public $timestaps=false;
}