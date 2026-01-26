<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Http\Clases\App;
use App\Models\Country;
use App\Models\Student;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $modelLabel = 'Alumno';
    protected static ?string $pluralModelLabel = 'Alumnos';
    protected static ?string $navigationLabel = 'Alumnos';
    protected static ?string $navigationGroup = App::FILAMENT_GROUP_CURSO;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Datos de Usuario')
                    ->description('Credenciales de acceso al sistema')
                    ->schema([
                        Forms\Components\TextInput::make('user.email')
                            ->label('Correo Electrónico')
                            ->email()
                            ->required()
                            ->unique(table: 'users', column: 'email', ignoreRecord: true)
                            ->maxLength(255),
                        Forms\Components\TextInput::make('user.password')
                            ->label('Contraseña')
                            ->password()
                            ->required(fn (string $operation): bool => $operation === 'create')
                            ->dehydrated(fn (?string $state): bool => filled($state))
                            ->minLength(8)
                            ->maxLength(255),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Datos del Alumno')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nombre')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('last_name')
                            ->label('Apellido')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('phone')
                            ->label('Teléfono')
                            ->tel()
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
                        Forms\Components\Select::make('country_id')
                            ->label('País')
                            ->relationship('country', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),
                        Forms\Components\DatePicker::make('registration_date')
                            ->label('Fecha de Registro')
                            ->default(now())
                            ->required(),
                        Forms\Components\Toggle::make('is_active')
                            ->label('Activo')
                            ->default(true)
                            ->required(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nombre')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('last_name')
                    ->label('Apellido')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.email')
                    ->label('Correo')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Teléfono')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telegram_user')
                    ->label('Telegram')
                    ->prefix('@')
                    ->url(fn ($record) => $record->telegram_user ? "https://t.me/{$record->telegram_user}" : null)
                    ->openUrlInNewTab()
                    ->searchable(),
                Tables\Columns\TextColumn::make('country.name')
                    ->label('País')
                    ->sortable(),
                Tables\Columns\TextColumn::make('registration_date')
                    ->label('Fecha Registro')
                    ->date()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Activo')
                    ->boolean(),
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
                Tables\Filters\SelectFilter::make('country')
                    ->label('País')
                    ->relationship('country', 'name'),
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Estado')
                    ->placeholder('Todos')
                    ->trueLabel('Activos')
                    ->falseLabel('Inactivos'),
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
