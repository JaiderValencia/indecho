<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    //
    protected $table = 'documents';
    protected $fillable = [
        'title',
        'path',
        'document_category_id'
    ];
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Document_category::class, 'document_category_id');
    }
}
