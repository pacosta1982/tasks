<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'start_date',
        'end_date',
        'enabled',
    
    ];
    
    
    protected $dates = [
        'start_date',
        'end_date',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/tasks/'.$this->getKey());
    }
}
