<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SlideResource\Pages;
use App\Filament\Resources\SlideResource\RelationManagers;
use App\Http\Clases\App;
use App\Models\Slide;
use Filament\Forms;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SlideResource extends Resource
{
    protected static ?string $model = Slide::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = 'Slide';
    protected static ?string $pluralModelLabel = 'Slides';
    protected static ?string $navigationGroup = App::FILAMENT_GROUP_LANDING;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Contenido Principal')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Título')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('highlight')
                            ->label('Texto Destacado')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('tag')
                            ->label('Etiqueta')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('description')
                            ->label('Descripción')
                            ->required()
                            ->columnSpanFull(),
                    ])->columns(2),

                Forms\Components\Section::make('Imagen y Tarjeta Flotante')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->label('Imagen de Fondo')
                            ->image()
                            ->disk('public')
                            ->directory('slides')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('floating_card_title')
                            ->label('Título Tarjeta')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('floating_card_description')
                            ->label('Descripción Tarjeta')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('floating_card_icon')
                            ->label('Ícono Tarjeta')
                            ->helperText('Nombre del ícono en Lucide.dev')
                            ->required()
                            ->maxLength(255)
                            ->suffixAction(
                                Action::make('browse_icons')
                                    ->icon('heroicon-o-arrow-top-right-on-square')
                                    ->url('https://lucide.dev/icons/', shouldOpenInNewTab: true)
                            ),
                    ])->columns(3),

                Forms\Components\Section::make('Botones')
                    ->schema([
                        Forms\Components\TextInput::make('primary_btn_text')
                            ->label('Texto Botón Primario')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('primary_btn_link')
                            ->label('Enlace Botón Primario')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('secondary_btn_text')
                            ->label('Texto Botón Secundario')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('secondary_btn_link')
                            ->label('Enlace Botón Secundario')
                            ->required()
                            ->maxLength(255),
                    ])->columns(2),

                Forms\Components\Section::make('Indicadores')
                    ->schema([
                        Forms\Components\Repeater::make('indicators')
                            ->label('Indicadores')
                            ->schema([
                                Forms\Components\TextInput::make('icon')
                                    ->label('Ícono')
                                    ->helperText('Copia el nombre del ícono desde la web de Lucide.dev.')
                                    ->maxLength(255)
                                    ->suffixAction(
                                        Action::make('browse_icons')
                                            ->icon('heroicon-o-arrow-top-right-on-square')
                                            ->url('https://lucide.dev/icons/', shouldOpenInNewTab: true)
                                    )->required(),
                                Forms\Components\TextInput::make('text')
                                    ->label('Texto')
                                    ->required(),
                                Forms\Components\TextInput::make('color')
                                    ->label('Clase de Color')
                                    ->placeholder('text-primary')
                                    ->required(),
                            ])
                            ->columns(3)
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Programación')
                    ->schema([
                        Forms\Components\Toggle::make('expiration')
                            ->label('Habilitar Expiración')
                            ->live(),
                        Forms\Components\DateTimePicker::make('activation_date')
                            ->label('Fecha de Activación'),
                        Forms\Components\DateTimePicker::make('expiration_date')
                            ->label('Fecha de Expiración')
                            ->hidden(fn(Get $get) => !$get('expiration')),
                    ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Imagen'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Título')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tag')
                    ->label('Etiqueta')
                    ->searchable(),
                Tables\Columns\IconColumn::make('expiration')
                    ->label('Expira')
                    ->boolean(),
                Tables\Columns\TextColumn::make('activation_date')
                    ->label('Activación')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('expiration_date')
                    ->label('Expiración')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Creado el')
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
            'index' => Pages\ListSlides::route('/'),
            'create' => Pages\CreateSlide::route('/create'),
            'edit' => Pages\EditSlide::route('/{record}/edit'),
        ];
    }
}
