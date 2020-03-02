<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
    use SoftDeletes;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $table = 'agencies';
    protected $primaryKey = 'id';
    public function addresses (){
         $this->belongsToMany('App\Address', 'categoryToAddress', 'addressId', 'categoryId');
    }
    public function agencys (){
         $this->belongsToMany('App\Agency', 'categoryToAgency', 'agencyId', 'categoryId');
    }
    public function  assets(){
         $this->belongsToMany('App\Asset', 'categoryToAsset', 'assetId', 'categoryId');
    }
    public function applications(){
         $this->belongsToMany('App\Application', 'categoryToApplication', 'applicationId', 'categoryId');
    }
    public function cases (){
         $this->belongsToMany('App\Case', 'categoryToCase', 'caseId', 'categoryId');
    }
    public function companys (){
         $this->belongsToMany('App\Company', 'categoryToCompany', 'companyId', 'categoryId');
    }
    public function emails (){
         $this->belongsToMany('App\Email', 'categoryToEmail', 'emailId', 'categoryId');
    }
    public function events (){
         $this->belongsToMany('App\Event', 'categoryToEvent', 'eventId', 'categoryId');
    }
    public function persons (){
         $this->belongsToMany('App\Person', 'categoryToPerson', 'personId', 'categoryId');
    }
    public function phones (){
         $this->belongsToMany('App\Phone', 'categoryToPhone', 'phoneId', 'categoryId');
    }
    public function tickets (){
         $this->belongsToMany('App\Ticket', 'categoryToTicket', 'ticketId', 'categoryId');
    }
    public function websites (){
         $this->belongsToMany('App\Website', 'categoryToWebsite', 'websiteId', 'categoryId');
    }
}


