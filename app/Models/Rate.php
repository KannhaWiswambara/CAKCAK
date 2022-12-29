<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;
    public $primarykey='rate_id';
    protected $table='rates';
    protected $fillable = [
        'package_id', 'rate_name', 'date_from', 'date_end', 'qty_per_day', 'adult_rate', 'child_rate','infant_rate','foreign_adult_rate','foreign_child_rate',
        'foreign_infant_rate',''
    ];
    public function packages(){
        return $this->hasMany(Packages::class, 'package_id', 'package_id');
    }
}
