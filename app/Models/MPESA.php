<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MPESA extends Model
{
    use HasFactory;
    public $table = 'mpesa_payments';
}
