<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'name',
        'url',
        'owner',
        'folder_id',
        'description'
    ];

    public function folder()
    {
        return $this->belongsTo(Folder::class);
    }

    public function docOwner(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'owner', 'id');
    }
}
