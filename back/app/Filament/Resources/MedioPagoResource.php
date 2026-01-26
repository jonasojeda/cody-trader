<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MedioPagoResource\Pages;
use App\Filament\Resources\MedioPagoResource\RelationManagers;
use App\Http\Clases\App;
use App\Models\MedioPago;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MedioPagoResource extends Resource
{
    protected static ?string $model = MedioPago::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';
    protected static ?string $modelLabel = 'Medio de Pago';
    protected static ?string $pluralModelLabel = 'Medios de Pago';
    protected static ?string $navigationLabel = 'Medios de Pago';
    protected static ?string $navigationGroup = App::FILAMENT_GROUP_LANDING;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nombre')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('descripcion')
                    ->label('Descripción')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('reference_code')
                    ->label('Código de Referencia')
                    ->maxLength(255),
                Forms\Components\FileUpload::make('qr_pay')
                    ->label('QR de Pago')
                    ->image()
                    ->openable()
                    ->disk('public')
                    ->optimize('jpg')
                    ->directory('medios-pagos'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('reference_code')
                    ->label('Código de Referencia')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('qr_pay')
                    ->label('QR de Pago'),
                // Tables\Columns\TextColumn::make('created_at')
                //     ->label('Creado el')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->label('Actualizado el')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\TextColumn::make('deleted_at')
                //     ->label('Eliminado el')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
                    // Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMedioPagos::route('/'),
            // 'create' => Pages\CreateMedioPago::route('/create'),
            'edit' => Pages\EditMedioPago::route('/{record}/edit'),
        ];
    }
}
