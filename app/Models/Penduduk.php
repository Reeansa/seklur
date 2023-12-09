<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter( Builder $query, array $filters ): void
    {
        $query->when( $filters[ 'search' ] ?? false, function ($query, $search) {
            $query->where( 'nama', 'like', '%' . $search . '%' )
                ->orWhere( 'nik', 'like', '%' . $search . '%' );
        } );
    }
}
