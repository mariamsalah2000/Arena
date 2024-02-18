<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;
    protected $table = 'platforms';
    protected $fillable = [
    'title','subtitle','desc','img'
    ];
    public function details()
    {
    return $this->hasMany('App\Models\PlatformDetail')->orderBy('order','ASC');
    }

}
