<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['name','description','university_name','study_language','language_level','duration','user_id','slug'];
     public function user(){
         return $this->belongsTo('App\User','user_id');
     }
}
