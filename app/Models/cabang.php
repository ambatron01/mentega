<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cabang extends Model
{
    protected $table ='cabang';
    protected $guared = ['id_cabang'];
    protected $prymaryKey = 'id';
    public $timestaps=false;
}