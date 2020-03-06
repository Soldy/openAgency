<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use SoftDeletes;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $table = 'tickets';
    protected $primaryKey = 'id';
    public function agencies (){
         $this->belongsToMany('App\Agency', 'ticketToAgency', 'agencyId', 'ticketId');
    }
    public function applications (){
         $this->belongsToMany('App\Application', 'ticketToApplication', 'applicationId', 'agencyId');
    }
    public function cases (){
         $this->belongsToMany('App\Case', 'ticketToCase', 'caseId', 'agencyId');
    }
    public function categories (){
         $this->belongsToMany('App\Category', 'categoryToTicket', 'categoryId', 'ticketId');
    }
    public function comments (){
         $this->belongsToMany('App\Comment', 'commentToTicket', 'commentId', 'ticketId');
    }
    public function companies (){
         $this->belongsToMany('App\Company', 'ticketToCompany', 'companyId', 'ticketId');
    }
    public function events (){
         $this->belongsToMany('App\Event', 'ticketToEvent', 'eventId', 'ticketId');
    }
    public function files (){
         $this->belongsToMany('App\File', 'fileToTicket', 'fileId', 'ticketId');
    }
    public function persones (){
         $this->belongsToMany('App\Person', 'ticketToPerson', 'personId', 'ticketId');
    }


}
