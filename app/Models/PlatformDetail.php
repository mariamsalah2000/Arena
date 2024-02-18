<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlatformDetail extends Model
{
    use HasFactory;
    protected $table = 'platform_details';
    protected $fillable = [
    'title','desc','img','order'
    ];
    public function platform()
    {
        return $this->belongsTo('App\Models\Platform')->orderBy('order', 'ASC');
    }

}
