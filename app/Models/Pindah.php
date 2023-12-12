<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pindah extends Model
{
    use HasFactory;

    protected $guarded = [ 'id' ];

    public function penduduk(): BelongsTo
    {
        return $this->belongsTo( Penduduk::class );
    }
}
