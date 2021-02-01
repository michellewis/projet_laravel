<?php
 
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Message extends Model
{
    protected $fillable = [
        'content', 'from_id', 'to_id', 'read_at','created_at','update_at',
    ];

    public $timestamp=false;

    protected $dates = [
         'read_at','created_at','update_at'
    ];

    public function from (){
        return $this->belongsTo(User::class,'from_id');
    }
}
