<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CredentialResource\Pages;
use App\Filament\Resources\CredentialResource\RelationManagers;
use App\Http\Clases\App;
use App\Models\Credential;
use Filament\Forms;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CredentialResource extends Resource
{
    protected static ?string $model = Credential::class;

    protected static ?string $navigationIcon = 'heroicon-o-check-badge';

    protected static ?string $modelLabel = 'Credencial';
    protected static ?string $pluralModelLabel = 'Credenciales';
    protected static ?string $navigationGroup = App::FILAMENT_GROUP_LANDING;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('icon')
                    ->label('Ícono')
                    ->helperText('Copia el nombre del ícono desde la web de Lucide.dev.')
                    ->maxLength(255)
                    ->suffixAction(
                        Action::make('browse_icons')
                            ->icon('heroicon-o-arrow-top-right-on-square')
                            ->url('https://lucide.dev/icons/', shouldOpenInNewTab: true)
                    )
                    ->required(),
                Forms\Components\TextInput::make('value')
                    ->label('Valor')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('label')
                    ->label('Etiqueta')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->label('Descripción')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('icon')
                    ->label('Icono')
                    ->searchable(),
                Tables\Columns\TextColumn::make('value')
                    ->label('Valor')
                    ->searchable(),
                Tables\Columns\TextColumn::make('label')
                    ->label('Etiqueta')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Descripción')
                    ->limit(50)
                    ->searchable(),
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
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListCredentials::route('/'),
            'create' => Pages\CreateCredential::route('/create'),
            'edit' => Pages\EditCredential::route('/{record}/edit'),
        ];
    }
}
