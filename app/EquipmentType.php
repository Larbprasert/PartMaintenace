<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class equiptmentType extends Model  {

    protected $table = 'tb_equipmenttype';
    public $primaryKey = 'equipTypeId';
    protected $softDelete = false;
}

?>