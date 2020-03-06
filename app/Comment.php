<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $table = 'comments';
    protected $primaryKey = 'id';
    public function tickets (){
         $this->belongsToMany('App\Ticket', 'commentToTicket', 'ticketId', 'commentId');
    }

}


