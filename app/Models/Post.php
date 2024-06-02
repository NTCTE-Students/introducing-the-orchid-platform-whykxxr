<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
class Post extends Model
{
    use HasFactory;
    use AsSource, Attachable;

    
    protected $fillable = [
        'title',
        'description',
        'body',
        'author',
        'hero'
    ];
}