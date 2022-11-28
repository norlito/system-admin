<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'class';
    protected $primaryKey = 'id';
    protected $fillable = ['classname','section','subject','room'];

    public function classStud() 
    {
        return $this->hasOne('App\Student');
    }
}
