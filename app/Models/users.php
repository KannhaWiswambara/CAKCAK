<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
    public $primarykey='user_id';
    protected $table='user';
    protected $fillable = [
        'user_name', 'user_email', 'package_id'
    ];
    public function packages(){
        return $this->hasMany(Packages::class, 'package_id', 'package_id');
    }
}
