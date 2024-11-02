<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Submission extends Model
{
    use HasFactory;

    // Una entrega pertenece a un estudiante
    public function student(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Una entrega pertenece a un trabajo
    public function assignment(): BelongsTo
    {
        return $this->belongsTo(Assignment::class);
    }
}
