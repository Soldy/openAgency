<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agency extends Model
{
    use SoftDeletes;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $table = 'agencies';
    protected $primaryKey = 'id';
    public static function details($id){
         return self::where('id',$id)
              ->limit(1)
              ->get([
                   'id',
                   'name', 
                   'address', 
                   'city', 
                   'postcode', 
                   'phone',
                   'website', 
                   'description'
              ])
              ->toArray();
    }
    public function applications(){
         $this->belongsToMany('App\Application', 'applicationToAgency', 'applicationId', 'agencyId');
    }
    public function addresses(){
         $this->belongsToMany('App\Address', 'addressToAgency', 'addressId', 'agencyId');
    }
    public function cases(){
         $this->belongsToMany('App\Case', 'caseToAgency', 'caseId', 'agencyId');
    }
    public function categorys(){
         $this->belongsToMany('App\Category', 'categoryToAgency', 'categoryId', 'agencyId');
    }
    public function events(){
         $this->belongsToMany('App\Event', 'eventToAgency', 'eventId', 'agencyId');
    }
    public function files(){
         $this->belongsToMany('App\Files', 'fileToAgency', 'fileId', 'agencyId');
    }
    public function phones(){
         $this->belongsToMany('App\Phone', 'phoneToAgency', 'phoneId', 'agencyId');
    }
    public function tickets(){
         $this->belongsToMany('App\Ticket', 'ticketToAgency', 'ticketId', 'agencyId');
    }
    public function websites(){
         $this->belongsToMany('App\Website', 'websiteToAgency', 'websiteId', 'agencyId');
    }
    function __construct(){
    }
}
