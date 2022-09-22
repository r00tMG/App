<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;
    protected $table='employees';
    protected $fillable=['nom','prenom','tel','email','login'];

    /**
     * Get all of the Employee for the Employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Employee(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
}
