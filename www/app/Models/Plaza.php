<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Plaza extends Model
{
    
    /**
     * categoies | (Has Many) Relational Mapping function
     * @return Illuminate/Database/Eloquent/Relations/hasMany
     */
    public function categoies()
    {
        return $this->hasMany(App\Models\Category::class);
    }

    /**
     * shops | (Has Many) Relational Mapping function
     * @return Illuminate/Database/Eloquent/Relations/hasMany
     */
    public function shops()
    {
        return $this->hasMany(App\Models\Shop::class);
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
