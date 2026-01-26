<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReservationResource\Pages;
use App\Filament\Resources\ReservationResource\RelationManagers;
use App\Http\Clases\App;
use App\Models\Country;
use App\Models\Reservation;
use App\Models\Student;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Hash;

class ReservationResource extends Resource
{
    protected static ?string $model = Reservation::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $modelLabel = 'Reservación';
    protected static ?string $pluralModelLabel = 'Reservaciones';
    protected static ?string $navigationLabel = 'Reservaciones';
    protected static ?string $navigationGroup = App::FILAMENT_GROUP_LANDING;

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
                Tables\Actions\Action::make('generateStudent')
                    ->label('Generar Alumno')
                    ->icon('heroicon-o-user-plus')
                    ->color('success')
                    ->visible(fn (Reservation $record): bool => !User::where('email', $record->email)->exists())
                    ->form([
                        Forms\Components\Section::make('Datos de Usuario')
                            ->description('Credenciales de acceso al sistema')
                            ->schema([
                                Forms\Components\TextInput::make('email')
                                    ->label('Correo Electrónico')
                                    ->email()
                                    ->required()
                                    ->unique(table: 'users', column: 'email')
                                    ->default(fn (Reservation $record) => $record->email)
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('password')
                                    ->label('Contraseña')
                                    ->password()
                                    ->required()
                                    ->minLength(8)
                                    ->maxLength(255)
                                    ->default(fn () => \Illuminate\Support\Str::random(12)),
                            ])
                            ->columns(2),

                        Forms\Components\Section::make('Datos del Alumno')
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->label('Nombre')
                                    ->required()
                                    ->default(fn (Reservation $record) => $record->name)
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('last_name')
                                    ->label('Apellido')
                                    ->required()
                                    ->default(fn (Reservation $record) => $record->last_name)
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('phone')
                                    ->label('Teléfono')
                                    ->tel()
                                    ->default(fn (Reservation $record) => $record->phone)
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('telegram_user')
                                    ->label('Usuario de Telegram')
                                    ->default(fn (Reservation $record) => $record->telegram_user)
                                    ->maxLength(255)
                                    ->prefix('@'),
                                Forms\Components\Select::make('country_id')
                                    ->label('País')
                                    ->options(Country::pluck('name', 'id'))
                                    ->searchable()
                                    ->default(fn (Reservation $record) => $record->country_id)
                                    ->required(),
                                Forms\Components\DatePicker::make('registration_date')
                                    ->label('Fecha de Registro')
                                    ->default(now())
                                    ->required(),
                                Forms\Components\Toggle::make('is_active')
                                    ->label('Activo')
                                    ->default(true),
                            ])
                            ->columns(2),
                    ])
                    ->action(function (array $data, Reservation $record): void {
                        // Verificar nuevamente que no exista el usuario
                        if (User::where('email', $data['email'])->exists()) {
                            Notification::make()
                                ->title('Error')
                                ->body('Ya existe un usuario con este correo electrónico.')
                                ->danger()
                                ->send();
                            return;
                        }

                        // Crear el usuario
                        $user = User::create([
                            'name' => $data['name'] . ' ' . $data['last_name'],
                            'email' => $data['email'],
                            'password' => Hash::make($data['password']),
                        ]);

                        // Crear el estudiante
                        Student::create([
                            'name' => $data['name'],
                            'last_name' => $data['last_name'],
                            'phone' => $data['phone'],
                            'telegram_user' => $data['telegram_user'],
                            'country_id' => $data['country_id'],
                            'user_id' => $user->id,
                            'registration_date' => $data['registration_date'],
                            'is_active' => $data['is_active'],
                        ]);

                        Notification::make()
                            ->title('Alumno generado')
                            ->body("Se ha creado el alumno {$data['name']} {$data['last_name']} exitosamente.")
                            ->success()
                            ->send();
                    })
                    ->modalHeading('Generar Alumno desde Reservación')
                    ->modalDescription('Complete o edite los datos del alumno antes de crear.')
                    ->modalSubmitActionLabel('Crear Alumno')
                    ->requiresConfirmation(false),
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
