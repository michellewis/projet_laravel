<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;
    protected $fillable = ['start_date', 'end_date', 'description'];

    public function getHappenedAttribute() {
        return strtotime($this->attributes['end_date'])  < strtotime(date('Y-m-d'));
    }
}
