<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LearningResource\Pages;
use App\Filament\Resources\LearningResource\RelationManagers;
use App\Models\Learning;
use Filament\Forms;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LearningResource extends Resource
{
    protected static ?string $model = Learning::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $modelLabel = 'Aprendizaje';
    protected static ?string $pluralModelLabel = 'Aprendizajes';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Título')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('icon')
                    ->label('Ícono')
                    ->helperText('Copia el nombre del ícono desde la web de Lucide.dev.')
                    ->maxLength(255)
                    ->suffixAction(
                        Action::make('browse_icons')
                            ->icon('heroicon-o-arrow-top-right-on-square')
                            ->url('https://lucide.dev/icons/', shouldOpenInNewTab: true)
                    )->required(),
                Forms\Components\TagsInput::make('topics')
                    ->label('Temas')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Título')
                    ->searchable(),
                Tables\Columns\TextColumn::make('icon')
                    ->label('Icono')
                    ->searchable(),
                Tables\Columns\TextColumn::make('topics')
                    ->label('Temas')
                    ->listWithLineBreaks()
                    ->limitList(3)
                    ->expandableLimitedList(),
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
            'index' => Pages\ListLearnings::route('/'),
            'create' => Pages\CreateLearning::route('/create'),
            'edit' => Pages\EditLearning::route('/{record}/edit'),
        ];
    }
}
