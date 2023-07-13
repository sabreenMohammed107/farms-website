<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website_new extends Model
{
    use HasFactory;
    protected $table = 'website_news';
    protected $fillable = [
        'title',
        'details',
        'image',
    ];
}
