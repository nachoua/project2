<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class DB_Project extends Model
{
    use HasFactory;
      protected $table = 'person';
      protected $guarded = [];
    protected $primaryKey = 'id'; // here set table's primary Key field name
    // protected $fillable = ['id' ];
    // protected $fillable = ['first_name', 'last_name', 'gender', 'email', 'telephone', 'image'];
}
