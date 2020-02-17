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
    public static function justAdd($country, $number, $extension){
         $old = self::where('countryCode', $country)
             ->where('number',  $number)
             ->where('extension', $extension)
             ->get()->toArray();
         if(count($old)>0)
             return $old[0]['id'];
        $phone = new self;
        $phone->countryCode = $country;
        $phone->number = $number;
        $phone->extension = $extension;
        $phone->save();
        return $phone->id;
    }
}
