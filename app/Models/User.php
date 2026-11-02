<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password', 'role', 'avatar', 'can_access_settings'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // ─── Relationships ───────────────────────────────────────

    public function blogPosts(): HasMany
    {
        return $this->hasMany(BlogPost::class, 'author_id');
    }

    // ─── Scopes ──────────────────────────────────────────────

    public function scopeAdmins(Builder $query): Builder
    {
        return $query->where('role', 'super-admin');
    }

    public function scopeEditors(Builder $query): Builder
    {
        return $query->where('role', 'editor');
    }

    public function scopeHr(Builder $query): Builder
    {
        return $query->where('role', 'hr');
    }

    // ─── Role Helpers ────────────────────────────────────────

    public function isSuperAdmin(): bool
    {
        return $this->role === 'super-admin';
    }

    public function isEditor(): bool
    {
        return $this->role === 'editor';
    }

    public function isHr(): bool
    {
        return $this->role === 'hr';
    }

    public function isAdmin(): bool
    {
        return in_array($this->role, ['super-admin', 'admin', 'editor', 'hr']);
    }

    public function getCanAccessSettingsAttribute(): bool
    {
        return $this->isSuperAdmin();
    }
}
