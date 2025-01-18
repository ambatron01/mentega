<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table ='buku';
    protected $guared = ['id_buku'];
    protected $prymaryKey = 'id';
    public $timestaps=false;
}