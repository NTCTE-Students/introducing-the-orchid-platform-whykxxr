<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
class Post extends Model
{
    use HasFactory;
    use AsSource, Attachable;
    use Filterable;

    
    protected $fillable = [
        'title',
        'description',
        'body',
        'author',
        'hero'
    ];
            /**
     * Name of columns to which http sorting can be applied
     *
     * @var array
     */
    protected $allowedSorts = [
        'title',
        'created_at',
        'updated_at'
    ];
}