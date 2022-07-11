<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'alamat', 'telepon', 'pekerjaan'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
