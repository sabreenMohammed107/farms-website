<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';
    protected $fillable = [
        'name',
        'details',
        'image',
        'cat_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }

}
