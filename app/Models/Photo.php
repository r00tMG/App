<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory;
    protected $table='photos';
    protected $fillable=['titre','chemin'];
    /**
     * Get all of the Avoir for the Photo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Avoir(): HasMany
    {
        return $this->hasMany(Avoir::class);
    }
}
