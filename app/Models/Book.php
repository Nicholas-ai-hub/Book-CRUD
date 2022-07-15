<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Status;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'published', 'author', 'status_id'];

    public function status(){
        return $this->belongsTo(Status::class);
    }
}
