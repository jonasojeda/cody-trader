<?php

namespace App\Filament\Resources\StudentResource\Pages;

use App\Filament\Resources\StudentResource;
use App\Models\User;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Hash;

class EditStudent extends EditRecord
{
    protected static string $resource = StudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        // Cargar datos del usuario para el formulario
        $student = $this->record;
        if ($student->user) {
            $data['user'] = [
                'email' => $student->user->email,
                'password' => '', // No mostramos la contraseña
            ];
        }

        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Extraer datos del usuario
        $userData = $data['user'] ?? [];
        unset($data['user']);

        // Actualizar el usuario si existe
        if ($this->record->user) {
            $userUpdateData = [
                'name' => $data['name'] . ' ' . $data['last_name'],
                'email' => $userData['email'],
            ];

            // Solo actualizar password si se proporcionó uno nuevo
            if (!empty($userData['password'])) {
                $userUpdateData['password'] = Hash::make($userData['password']);
            }

            $this->record->user->update($userUpdateData);
        }

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
