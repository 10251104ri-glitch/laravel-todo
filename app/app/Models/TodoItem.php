<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model
{
    use HasFactory;
    // ここから追加
    protected $fillable = ['user_id','title','is_done',];
    // ここまで追加
}
