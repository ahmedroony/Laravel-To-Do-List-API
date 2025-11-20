<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['description'];
    public function isdone(){
        return $this->completed_at !== null;
    }
}
