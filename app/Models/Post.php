<?php

namespace App;
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use AsSource;

    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'body',
        'author'
    ];
}