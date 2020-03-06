<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Phone extends Model
{
    use SoftDeletes;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $table = 'phones';
    protected $primaryKey = 'id';
    public function agencies (){
         $this->belongsToMany('App\Agency', 'phoneToAgency', 'agencyId', 'phoneId');
    }
    public function categories (){
         $this->belongsToMany('App\Category', 'categoryToPhone', 'categoryId', 'phoneId');
    }
    public function companies (){
         $this->belongsToMany('App\Company', 'phoneToCompany', 'companyId', 'phoneId');
    }
    public function persones (){
         $this->belongsToMany('App\Person', 'phoneToPerson', 'personId', 'phoneId');
    }
}
