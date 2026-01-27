<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens;
    use HasFactory;
    // use HasRoles;
    use Notifiable;
    use SoftDeletes;
    use CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    //Funciones publicas
    public function obtenerObjDatos(): array
    {
        return [
            'id' => $this->id,
            'username' => $this->username,
            'email' => $this->email,
            'verificacionEmail' => $this->email_verified_at,
            'student' => $this->student?->obtenerDatos(),
            'creado' => $this->created_at,
        ];
    }

    public function obtenerObjDatosSesion(): array
    {
        return [
            'id' => $this->id,
            'username' => $this->username,
            'email' => $this->email,
            'verificacionEmail' => $this->email_verified_at,
            'student' => $this->student?->obtenerDatos(),
            'creado' => $this->created_at,
        ];
    }

    //Relaciones
    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function canAccessPanel(Panel $panel): bool
    {
        if (!$this->student()->exists()) {
            return true;
        }
        return false;
    }
}
