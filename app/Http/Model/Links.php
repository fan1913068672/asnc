<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    //
    protected $table = 'asnc_link';
    protected $primaryKey='link_id';
    public $timestamps = false;
    protected $guarded = [];
}
