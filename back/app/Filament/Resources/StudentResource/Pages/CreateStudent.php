<?php

namespace App\Filament\Resources\StudentResource\Pages;

use App\Filament\Resources\StudentResource;
use App\Models\User;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Hash;

class CreateStudent extends CreateRecord
{
    protected static string $resource = StudentResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Extraer datos del usuario
        $userData = $data['user'] ?? [];
        unset($data['user']);

        // Crear el usuario primero
        $user = User::create([
            'name' => $data['name'] . ' ' . $data['last_name'],
            'email' => $userData['email'],
            'password' => Hash::make($userData['password']),
        ]);

        // Asignar el user_id al estudiante
        $data['user_id'] = $user->id;

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
