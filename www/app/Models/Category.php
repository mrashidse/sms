<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * plaza | (Belongs To) Relational Mapping function
     * @return Illuminate/Database/Eloquent/Relations/BelongsTo
     */ 
    public function plaza()
    {
        return $this->belongsTo(App\Models\Plaza::class);
    }

    /**
     * children | (Has Many) Relational Mapping function
     * @return Illuminate/Database/Eloquent/Relations/hasMany
     */
    public function children()
    {
        return $this->hasMany(App\Models\Catagory::class);
    }
}
