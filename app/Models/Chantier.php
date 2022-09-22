<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chantier extends Model
{
    use HasFactory;
    protected $table='chantiers';
    protected $fillable=['nom','description','montantPayer','photo','dateDebut','dateFin'];
    /**
     * Get all of the Manager for the Chantier
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Manager(): HasMany
    {
        return $this->hasMany(Manager::class);
    }

    /**
     * Get all of the Phase for the Chantier
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Phase(): HasMany
    {
        return $this->hasMany(Phase::class);
    }
}
