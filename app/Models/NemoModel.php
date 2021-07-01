<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NemoModel extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'nemo';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title', 'bodytext'
    ];

    public function getNemoData(){
         $findmysql = NemoModel::orderBy('id', 'DESC')->get();
         return $findmysql; 
    }
}
