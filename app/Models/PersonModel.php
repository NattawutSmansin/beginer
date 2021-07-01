<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonModel extends Model
{
    use HasFactory;

    protected $connection = 'sqlsrv';
    protected $table = 'PersonInfo';
    protected $primaryKey = 'PersonID';
    protected $fillable = [
        'PersonPrefixColID','PersonName','PersonLastName','PersonIDCard','PhoneNum','AddressOfPerson','City','Country','ZipCode','VillageColID','VillageNoColID','CreateDate','CreateBy','ModifiedDate','ModifiedBy'
    ];

    public function getPersonData()
    {
        $findsqlserver = PersonModel::orderBy('PersonID', 'DESC')->get();
        return $findsqlserver; 
    }    
    
}
