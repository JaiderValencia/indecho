<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document_category extends Model
{
    //
    protected $table = 'document_categories';

    protected $fillable = ['name'];

    public $timestamps = false;

    public function documents()
    {
        return $this->hasMany(Document::class, 'id');
    }
}
