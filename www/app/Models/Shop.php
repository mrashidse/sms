<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
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
     * users | (Has Many) Relational Mapping function
     * @return Illuminate/Database/Eloquent/Relations/hasMany
     */
    public function users()
    {
        return $this->hasMany(App\Models\User::class);
    }


}
