<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReservationResource\Pages;
use App\Filament\Resources\ReservationResource\RelationManagers;
use App\Models\Reservation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReservationResource extends Resource
{
    protected static ?string $model = Reservation::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $modelLabel = 'Reservación';
    protected static ?string $pluralModelLabel = 'Reservaciones';
    protected static ?string $navigationLabel = 'Reservaciones';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nombre')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('last_name')
                    ->label('Apellido')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->label('Correo Electrónico')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->label('Teléfono')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('telegram_user')
                    ->label('Usuario de Telegram')
                    ->maxLength(255)
                    ->prefix('@')
                    ->suffixAction(
                        Forms\Components\Actions\Action::make('openTelegram')
                            ->icon('heroicon-o-arrow-top-right-on-square')
                            ->url(fn ($state) => $state ? "https://t.me/{$state}" : null)
                            ->openUrlInNewTab()
                            ->visible(fn ($state) => filled($state))
                    ),
                Forms\Components\DateTimePicker::make('reservation_date')
                    ->label('Fecha de Reservación')
                    ->required(),
                Forms\Components\Toggle::make('confirmed')
                    ->label('Confirmado')
                    ->required(),
                Forms\Components\Toggle::make('paid')
                    ->label('Pagado')
                    ->required(),
                Forms\Components\FileUpload::make('ticket')
                    ->label('Comprobante / Ticket')
                    ->disk('public')
                    ->directory('reservations')
                    ->openable()
                    ->downloadable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('last_name')
                    ->label('Apellido')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Correo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Teléfono')
                    ->searchable(),
                Tables\Columns\TextColumn::make('reservation_date')
                    ->label('Fecha')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\IconColumn::make('confirmed')
                    ->label('Confirmado')
                    ->boolean(),
                Tables\Columns\IconColumn::make('paid')
                    ->label('Pagado')
                    ->boolean(),
                Tables\Columns\ImageColumn::make('ticket')
                    ->label('Ticket')
                    ->disk('public'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Creado el')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Actualizado el')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
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
            'index' => Pages\ListReservations::route('/'),
            'create' => Pages\CreateReservation::route('/create'),
            'edit' => Pages\EditReservation::route('/{record}/edit'),
        ];
    }
}
