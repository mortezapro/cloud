<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DirectoryModel extends Model
{
    protected $table = "directories";
    protected $primaryKey = "id";
    protected $fillable = [
        "name","user_id","parent_id",""
    ];
}
