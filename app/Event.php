<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Event extends Model
{
    use SoftDeletes;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $table = 'events';
    public function agencies (){
         $this->belongsToMany('App\Agency', 'eventToAgency', 'agencyId', 'eventId');
    }
    public function addresses (){
         $this->belongsToMany('App\Address', 'addressToEvent', 'addressId', 'eventId');
    }
    public function applications (){
         $this->belongsToMany('App\Application', 'eventToApplication', 'applicationId', 'eventId');
    }
    public function case (){
         $this->belongsToMany('App\Case', 'eventToCase', 'caseId', 'eventId');
    }
    public function categories (){
         $this->belongsToMany('App\Category', 'categoryToEvent', 'categoryId', 'eventId');
    }
    public function companies (){
         $this->belongsToMany('App\Company', 'eventToCompany', 'companyId', 'eventId');
    }
    public function files (){
         $this->belongsToMany('App\File', 'fileToEvent', 'fileId', 'eventId');
    }
    public function tickets (){
         $this->belongsToMany('App\Ticket', 'ticketToEvent', 'ticketId', 'eventId');
    }
    public function persones (){
         $this->belongsToMany('App\Person', 'eventToPerson', 'personId', 'eventId');
    }

}
