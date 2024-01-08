<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function course()
    {
        return $this->belongsTo(Paidcourse::class,'paidcourses_id');    //paidcourses_id ta database er enrolls table theke nite hbe karon course nam er kuno column nai
    }

}
