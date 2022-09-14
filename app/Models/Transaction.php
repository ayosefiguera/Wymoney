<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['description','amount'];


    protected function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }


    protected function account(){
        return $this->belongsTo(Account::class, 'account_id');
    }


}
