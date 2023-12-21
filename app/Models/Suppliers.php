<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'supplier';

       /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'supplier_id';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'supplier_name',
        'contact_info',
    ];
}
