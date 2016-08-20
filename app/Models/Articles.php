<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $table = 'article';
//    public $timestamps = false;
    protected $guarded = ['id'];
 //   protected $fillable = ['name', 'user_id'];



    
}