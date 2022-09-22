<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Avoir extends Model
{
    /*  $table->unsignedBigInteger('phase_id')->default();
            $table->unsignedBigInteger('photo_id')->default();
            $table->foreign('phase_id')->references('id')->on('phases');
            $table->foreign('photo_id')->references('id')->on('photos'); */
    use HasFactory;
    protected $table='avoirs';
    protected $fillable=['phase_id','photo_id'];
    /**
     * Get the Phase that owns the Avoir
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Phase(): BelongsTo
    {
        return $this->belongsTo(Phase::class);
    }
    /**
     * Get the Photo that owns the Avoir
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Photo(): BelongsTo
    {
        return $this->belongsTo(Photo::class, 'foreign_key', 'other_key');
    }
}
