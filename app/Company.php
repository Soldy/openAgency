<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $table = 'companies';
    protected $primaryKey = 'id';
    public function addresses(){
         $this->belongsToMany('App\Address', 'addressToCompany', 'addressId', 'companyId');
    }
    public function applications (){
         $this->belongsToMany('App\Application', 'applicationToCompany', 'applicationId', 'companyId');
    }
    public function cases (){
         $this->belongsToMany('App\Case', 'companyToCase', 'caseId', 'companyId');
    }
    public function categorys (){
         $this->belongsToMany('App\Company', 'categoryToCompany', 'categoryId', 'companyId');
    }
    public function emails (){
         $this->belongsToMany('App\Email', 'emailToCompany', 'emailId', 'companyId');
    }
    public function events (){
         $this->belongsToMany('App\Event', 'eventToCompany', 'eventId', 'companyId');
    }
    public function files (){
         $this->belongsToMany('App\File', 'fileToCompany', 'fileId', 'companyId');
    }
    public function phones (){
         $this->belongsToMany('App\Phone', 'phoneToCompany', 'phoneId', 'companyId');
    }
    public function tickets (){
         $this->belongsToMany('App\Ticket', 'ticketToCompany', 'ticketId', 'companyId');
    }
    public function websites (){
         $this->belongsToMany('App\Website', 'websiteToCompany', 'websiteId', 'companyId');
    }
}
