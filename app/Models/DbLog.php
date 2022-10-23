<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DbLog extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'message_log';
    protected $primaryKey = 'id';
}
