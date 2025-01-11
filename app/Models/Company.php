<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'status', 'subscription_end_date'];

    public function branches()
    {
        return $this->hasMany(Branch::class);
    }
}
