<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    public $primarykey='transaction_id';
    protected $table='transactions';
    protected $fillable = [
        'qty', 'total', 'rate_id'
    ];
    public function packages(){
        return $this->hasMany(Rate::class, 'rate_id', 'rate_id');
    }
}
