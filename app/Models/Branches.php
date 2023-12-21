<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branches extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'staff';

       /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'staff_id';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'manager_id',
            'staff_id',
            'branch_name',
            'address',
    ];

}
