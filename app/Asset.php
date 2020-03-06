<?php

namespace App;


use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asset extends Model
{
    use SoftDeletes;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $table = 'assets';
    protected $primaryKey = 'id';
    public function addresses(){
         $this->belongsToMany('App\Address', 'addressToAsset', 'addressId', 'assetId');
    }
    public function cases(){
         $this->belongsToMany('App\Case', 'assetToCase', 'caseId', 'assetId');
    }
    public function categorys(){
         $this->belongsToMany('App\Category', 'categoryToAsset', 'categoryId', 'assetId');
    }
    public function files(){
         $this->belongsToMany('App\File', 'fileToAsset', 'fileId', 'assetId');
    }
    public function websites(){
         $this->belongsToMany('App\Website', 'websiteToAsset', 'websiteId', 'assetId');
    }
}
