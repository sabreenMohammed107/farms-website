<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About_us extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'about_us';
    protected $fillable = [
        'title',
        'details',
        'image',
        'vision_title',
        'vision_description',
    ];
}
