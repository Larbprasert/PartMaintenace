<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Section extends Model {

    protected $table = 'tb_section';
    public $primaryKey = 'sectionId';
    // protected $fillable = ['buildingTitle'];

    /*******
     * For field UNIX Timestamp like 
     * - $hidden below :: laravel will automatically update data into this fields
     * - CREATED_AT, UPDATED_AT, DELETED_AT
     * - $softDelete :: laravel will write timestamp into fields Delete for softdelete
     *
     */ 

    // protected $dateFormat = 'U';
    // public $timestamps = true;

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    // protected $hidden = array('buildingCreateDate', 'buildingUpdateDate', 'buildingDeleteDate');

    /**
     * Enable soft deleting.
     *
     * @var bool
     */
    protected $softDelete = false;

    /**
     * Override the name of "created_at" column.
     *
     * @var string
     */
    // const CREATED_AT = 'buildingCreateDate';

    /**
     * Override the name of "updated_at" column.
     *
     * @var string
     */
    // const UPDATED_AT = 'buildingUpdateDate';

    /*
     * Override the name of "deleted_at" column.
     *
     * @var string
     */
    // const DELETED_AT = 'buildingDeleteDate';

    /**
     * Define a relationship with department
     *
     * @return \Illuminate\Database\Eloquent\Relations\Relation
     */
    public function department()
    {
        return $this->belongsTo(department::class, 'deptId');
    }

}
