<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'news';

    // /**
    //  * Indicates if the model should be timestamped.
    //  *
    //  * @var bool
    //  */
    // public $timestamps = false;  //不新增created_at 和 updated_at

}
