<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Email extends Model
{
    use SoftDeletes;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $table = 'emails';
    protected $primaryKey = 'id';
    public static function justAdd($address){
         $old = self::where('address', $address)
             ->get()
             ->toArray();
         if(count($old)>0)
             return $old[0]['id'];
        $email = new self();
        $email->address = $address;
        $email->save();
        return $email->id;
    }
    public function categories (){
         $this->belongsToMany('App\Category', 'categoryToEmail', 'categoryId', 'emailId');
    }
    public function companys (){
         $this->belongsToMany('App\Email', 'emailToCompany', 'companyId', 'emailId');
    }
    public function persones (){
         $this->belongsToMany('App\Person', 'emailToPerson', 'personeId', 'emailId');
    }
}
