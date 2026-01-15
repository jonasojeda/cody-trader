<?php

namespace App\Filament\Resources\MedioPagoResource\Pages;

use App\Filament\Resources\MedioPagoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMedioPagos extends ListRecords
{
    protected static string $resource = MedioPagoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
