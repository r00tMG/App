<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Manager extends Model
{
    use HasFactory;
    protected $table='managers';
    protected $fillable=[/* 'nom','prenom','tel','email', */'login'/* ,'role' */,'employee_id','chantier_id'];

    /**
     * Get the Chantier that owns the Manager
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Chantier(): BelongsTo
    {
        return $this->belongsTo(Chantier::class);
    }
    /**
     * Get the Employee that owns the Manager
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
