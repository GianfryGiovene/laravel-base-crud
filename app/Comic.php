<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// ------table comics model--------

class Comic extends Model
{
    //
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $fillable = ['title','description','thumb','price','series','sale_date','type'];
}
