<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'content',
        'category_id',
    ];

    /**
     * Custom the format of the date
     * @return string
     */
    public function formatDate(): string
    {
        return date_format($this->created_at, 'd/m/Y');
    }
}
