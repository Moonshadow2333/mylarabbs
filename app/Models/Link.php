<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    protected $fillable = ['title','link'];
    public $cache_key = 'larabbs_links';
    protected $cache_expire_in_seconds = 1440 * 60;
    public function getAllCached(){
        return Cache::remember($this->cache_key,$this->cache_expire_in_seconds,function(){
            return $this->all();
        });
    }
}
