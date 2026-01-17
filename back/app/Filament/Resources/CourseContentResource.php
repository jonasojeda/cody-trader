<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseContentResource\Pages;
use App\Filament\Resources\CourseContentResource\RelationManagers;
use App\Models\CourseContent;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Actions\Action;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CourseContentResource extends Resource
{
    protected static ?string $model = CourseContent::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $modelLabel = 'Contenido del Curso';

    protected static ?string $pluralModelLabel = 'Contenidos del Curso';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Información General')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->label('Título'),
                        Forms\Components\TextInput::make('academy')
                            ->required()
                            ->maxLength(255)
                            ->label('Academia'),
                        Forms\Components\TextInput::make('price')
                            ->required()
                            ->numeric()
                            ->prefix('$')
                            ->label('Precio'),
                        Forms\Components\TextInput::make('currency')
                            ->required()
                            ->maxLength(3)
                            ->default('USD')
                            ->label('Moneda'),
                    ])->columns(2),

                Forms\Components\Section::make('Detalles')
                    ->schema([
                        Forms\Components\Repeater::make('description')
                            ->schema([
                                Forms\Components\TextInput::make('text')
                                    ->required()
                                    ->label('Texto'),
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
                            ])
                            ->label('Descripción (Características)')
                            ->columns(2),

                        Forms\Components\TagsInput::make('content')
                            ->label('Contenido (Puntos clave)')
                            ->placeholder('Escribe y presiona Enter')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->label('Título'),
                Tables\Columns\TextColumn::make('academy')
                    ->searchable()
                    ->sortable()
                    ->label('Academia'),
                Tables\Columns\TextColumn::make('price')
                    ->money('USD')
                    ->sortable()
                    ->label('Precio'),
                Tables\Columns\TextColumn::make('currency')
                    ->searchable()
                    ->label('Moneda'),
                // Tables\Columns\TextColumn::make('created_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->label('Creado'),
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->label('Actualizado'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListCourseContents::route('/'),
            // 'create' => Pages\CreateCourseContent::route('/create'),
            'edit' => Pages\EditCourseContent::route('/{record}/edit'),
        ];
    }
}
