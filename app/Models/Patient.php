<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Patient extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $attributes   = [
        'status' => 0,
    ];

    // /**
    //  * Get the doctor that owns the Patient
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    //  */
    // public function doctor(): BelongsTo
    // {
    //     return $this->belongsTo(Doctor::class);
    // }

    public function statusOptions()
    {
        return[
            0=>'Inactive',
            1=>'Active',
        ];
    }
}

