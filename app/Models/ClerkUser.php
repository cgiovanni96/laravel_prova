<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ClerkUser extends Model
{
    use HasFactory;

    protected $primaryKey = 'clerk_id';

    public function tasks(): HasMany  {
        return $this->hasMany(Task::class, 'user_id');
    }
}
