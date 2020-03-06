<?php

namespace App;


use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Case extends Model
{
    use SoftDeletes;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $table = 'cases';
    protected $primaryKey = 'id';
    public function agencys(){
         $this->belongsToMany('App\Agency', 'agencyToCase', 'agencyId', 'caseId');
    }
    public function applications(){
         $this->belongsToMany('App\Application', 'applicationToCase', 'applicationId', 'caseId');
    }
    public function assets(){
         $this->belongsToMany('App\Asset', 'assetToCase', 'assetId', 'caseId');
    }
    public function categories(){
         $this->belongsToMany('App\Category', 'categoryToCase', 'categoryId', 'caseId');
    }
    public function events(){
         $this->belongsToMany('App\Event', 'eventToCase', 'eventId', 'caseId');
    }
    public function files(){
         $this->belongsToMany('App\File', 'fileToCase', 'fileId', 'caseId');
    }
    public function persones(){
         $this->belongsToMany('App\Person', 'personToCase', 'personId', 'caseId');
    }
    public function tickets(){
         $this->belongsToMany('App\Ticket', 'ticketToCase', 'ticketId', 'caseId');
    }
}
