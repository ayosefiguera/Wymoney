<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'iban',
        'is_active'
    ];


    protected function transactions(){
        return $this->hasMany(Transaction::class, 'account_id');
    }
}
