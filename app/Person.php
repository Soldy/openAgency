<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use SoftDeletes;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $table = 'persones';
    protected $primaryKey = 'id';
    public function addresses (){
         $this->belongsToMany('App\Address', 'addressToPerson', 'addressId', 'personId');
    }
    public function applications (){
         $this->belongsToMany('App\Application', 'applicationToPerson', 'applicationId', 'personId');
    }
    public function cases (){
         $this->belongsToMany('App\Case', 'personToCase', 'caseId', 'personId');
    }
    public function categorys (){
         $this->belongsToMany('App\Category', 'categoryToPerson', 'categoryId', 'personId');
    }
    public function emails (){
         $this->belongsToMany('App\Email', 'emailToPerson', 'emailId', 'personId');
    }
    public function events (){
         $this->belongsToMany('App\Event', 'eventToPerson', 'eventId', 'personId');
    }
    public function files (){
         $this->belongsToMany('App\File', 'fileToPerson', 'fileId', 'personId');
    }
    public function tickets (){
         $this->belongsToMany('App\Ticket', 'ticketToPerson', 'ticketId', 'personId');
    }
    public function websites (){
         $this->belongsToMany('App\Website', 'websiteToPerson', 'websiteId', 'personId');
    }
}
