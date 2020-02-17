<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $table = 'websites';
    protected $primaryKey = 'id';
    public static function justAdd($url){
         $old = self::where('url', $url)->get()->toArray();
         if(count($old)>0)
             return $old[0]['id'];
        $website = new self();
        $website->url = $url;
        $website->save();
        return $website->id;
    }
}
