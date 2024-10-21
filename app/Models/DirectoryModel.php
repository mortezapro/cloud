<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class DirectoryModel extends Model
{
    protected $table = "directories";
    protected $primaryKey = "id";
    protected $fillable = [
        "name","user_id","directory_id",""
    ];

    public function directories()
    {
        return $this->hasMany(DirectoryModel::class,"directory_id");
    }
    protected static function booted()
    {
        static::addGlobalScope('relation', function (Builder $builder) {
            $builder->with("directories")->orderBy("id","desc");
        });
    }
}
