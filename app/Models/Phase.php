<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Phase extends Model
{
    use HasFactory;
    protected $table='phases';
    protected $fillable=['libelle_phase','description_phase','chantier_id'];

    /**
     * Get the Chantier that owns the Phase
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Chantier(): BelongsTo
    {
        return $this->belongsTo(Chantier::class, 'foreign_key', 'other_key');
    }
    /**
     * Get all of the Avoir for the Phase
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Avoir(): HasMany
    {
        return $this->hasMany(Comment::class, 'foreign_key', 'local_key');
    }
}
