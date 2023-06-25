<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_page extends Model
{
    use HasFactory;
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'home_pages';
    protected $fillable = [
        'title',
    'details',
    'why_us_title',
    'why_us_details',
    ];



}
